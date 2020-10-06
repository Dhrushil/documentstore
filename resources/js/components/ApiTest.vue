<template>
  <v-container id="printMe">
    <v-data-table :headers="headers" :items="courses" color="red">
      <template v-slot:top>
            <v-btn fab dark text color="pink" @click="print"><v-icon>mdi-printer</v-icon></v-btn>
            <v-spacer></v-spacer>
        <v-dialog v-model="dialog" persistent max-width="600px">
          <template v-slot:activator="{on ,attrs}">
            <v-btn color="primary" fab icon dark v-bind="attrs" v-on="on">
              <v-icon>mdi-plus</v-icon>
            </v-btn>
          </template>
          <v-card>
            <v-card-title>
              <span class="headline">Create Moodle Course</span>
            </v-card-title>
            <v-text-field label="Course Name" v-model="courseFullname"></v-text-field>
            <v-text-field label="Short Name" v-model="courseShortname"></v-text-field>
            <v-text-field
              min="1"
              max="50"
              step="1"
              type="number"
              v-model="courseCategoryid"
              style="width: 125px"
            ></v-text-field>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="dialog = false">Close</v-btn>
              <v-btn color="blue darken-1" text @click="dialog = false, addCourses()">Save</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
        <v-dialog persistent max-width="600px" v-model="editDialog">
          <template v-slot:activator="{on, attrs}">
            <v-btn dark fab icon color="green" v-bind="attrs" v-on="on">
              <v-icon>mdi-pen</v-icon>
            </v-btn>
          </template>
          <v-card>
            <v-card-title>
              <span class="headline">Create Moodle Course</span>
            </v-card-title>
            <v-text-field label="Course Name" v-model="courseFullname"></v-text-field>
            <v-text-field label="ID" v-model="courseId"></v-text-field>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="editDialog = false">Close</v-btn>
              <v-btn color="blue darken-1" text @click="editDialog = false, updateCourses()">Save</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </template>
      <template v-slot:[`item.summary`]="{item}">
        <VueShowdown
              :markdown="`${item.summary}`"
              flavor="github"
              :options="{ emoji: true }"
            />
      </template>
      <template v-slot:[`item.id`]="{item}">
          {{item.id}}
        <v-btn fab dark icon color="red" @click="deleteCourse(item.id)">
          <v-icon>mdi-delete</v-icon>
        </v-btn>
      </template>
    </v-data-table>

  </v-container>
</template>

<style scoped>
h1 {
  position: relative;
  top: 10%;
}
a {
  text-decoration: none;
}
</style>

<script>
export default {
  data() {
    return {
      isAuthenticated: false,
      dialog: false,
      editDialog: false,
      courseCategoryid: 1,
      courseShortname: null,
      courseFullname: null,
      courseId: null,
      domainname: "https://sandbox.moodledemo.net",
      token: "9485d8a19d620f8828655dfeef4167c0",
      functionname: "core_course_get_courses",
      courses: [],
      headers: [
        {
          text: "Course",
          align: "Start",
          sortable: true,
          value: "displayname",
        },
        {
          text: "Summary",
          value: "summary",
        },
        {
          text: "Actions",
          value: "id",
        },
      ],
    };
  },
  methods: {
    checkAuth() {
      if (this.$userName.length > 0) {
        this.isAuthenticated = true;
      } else {
        this.isAuthenticated = false;
      }
      console.log(this.isAuthenticated);
    },
    getCourses() {
      var serverurl = this.domainname + "/webservice/rest/server.php";

      var data = {
        wstoken: this.token,
        wsfunction: this.functionname,
        moodlewsrestformat: "json",
      };
      var response = $.ajax({ type: "GET", data: data, url: serverurl });
      let self = this;
      response.then((r) => {
        console.log(r);
        self.courses = r;
      });
    },
    addCourses() {
      var functionname2 = "core_course_create_courses";

      var serverurl = this.domainname + "/webservice/rest/server.php";
      //add params into data

      var coursestocreate = [
        {
          fullname: this.courseFullname,
          shortname: this.courseShortname,
          categoryid: this.courseCategoryid,
        },
      ];

      var data = {
        wstoken: this.token,
        wsfunction: functionname2,
        moodlewsrestformat: "json",
        courses: coursestocreate,
      };
      var response = $.ajax({ type: "POST", data: data, url: serverurl });
      this.courseFullname = null;
      this.courseShortname = null;
      this.courseCategoryid = null;
      console.info(response);
    },
    deleteCourse(id) {
      var functionname = "core_course_delete_courses";
      var serverurl = this.domainname + "/webservice/rest/server.php";

      var data = {
        wstoken: this.token,
        wsfunction: functionname,
        moodlewsrestformat: "json",
        courseids: [id],
      };
      var response = $.ajax({ type: "POST", data: data, url: serverurl });
      console.info(response);
    },
    updateCourses() {
      var functionname = "core_course_update_courses";
      var serverurl = this.domainname + "/webservice/rest/server.php";

      var coursestoupdate = [
        {
          id: this.courseId,
          fullname: this.courseFullname,
        },
      ];

      var data = {
        wstoken: this.token,
        wsfunction: functionname,
        moodlewsrestformat: "json",
        courses: coursestoupdate,
      };

      var response = $.ajax({ type: "POST", data: data, url: serverurl });
      console.info(response);
    },
    print() {
        this.$htmlToPaper('printMe');
    }
  },
  mounted() {
    this.checkAuth();
    let moodleAPI = document.createElement("script");
    moodleAPI.setAttribute("src", "http://code.jquery.com/jquery-1.6.4.js");
    document.head.appendChild(moodleAPI);
    this.getCourses();
  },
};
</script>