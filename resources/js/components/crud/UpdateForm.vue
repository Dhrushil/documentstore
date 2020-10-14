<template>
  <div>
    <v-container>
      <h1>Definitive Documentation Store - Edit Form</h1>
      <v-card class="ma-2 mx-auto" max-width="1600" color="transparent" flat>
        <v-btn tile dark href="/modules/all" color="#0B72B1"> Back </v-btn>
      </v-card>
      <form
        method="post"
        :action="'/modules/edit/' + `${id}`"
        enctype="multipart/form-data"
      >
        <input type="hidden" name="_token" :value="csrf" />
        <v-card class="mx-auto ma-2 firstCard" max-width="1600">
          <v-card-title>Create Form</v-card-title>
          <v-card-text v-for="item in windowOne" v-bind:key="item.id">
            <v-text-field
              :name="`${item.name}`"
              :id="`${item.id}`"
              :placeholder="`${item.info}`"
              :value="`${item.oldVal}`"
            ></v-text-field>
          </v-card-text>
        </v-card>
        <v-card class="mx-auto ma-5" max-width="1600" tile>
          <v-card-title>Module details</v-card-title>
          <v-card-text v-for="item in windowTwo" v-bind:key="item.id">
            <v-text-field
              :name="`${item.name}`"
              :id="`${item.id}`"
              :placeholder="`${item.info}`"
              :value="`${item.oldVal}`"
            ></v-text-field>
          </v-card-text>
        </v-card>
        <v-card class="mx-auto ma-5" max-width="1600" tile>
          <v-card-title>Learning outcomes</v-card-title>
          <v-card-text v-for="item in windowThree" v-bind:key="item.id">
            <tiptap-vuetify
              v-model="item.markdownContent"
              :extensions="extensions"
              :id="item.id"
              :toolbar-attributes="{ color: 'primary' }"
              placeholder="Learning outcomes ..."
            />
            <input
              type="hidden"
              :name="item.name"
              :value="item.markdownContent"
            />
          </v-card-text>
        </v-card>
        <v-card class="mx-auto ma-5" max-width="1600" tile>
          <v-card-title>Learning Teaching Methods</v-card-title>
          <v-card-text v-for="item in windowFour" v-bind:key="item.id">
            <tiptap-vuetify
              v-model="item.markdownContent"
              :extensions="extensions"
              :id="item.id"
              :toolbar-attributes="{ color: 'primary' }"
              placeholder="Learning Teaching Methods ..."
            />
            <input
              type="hidden"
              :name="item.name"
              :value="item.markdownContent"
            />
          </v-card-text>
        </v-card>
        <v-card class="mx-auto ma-5" max-width="1600" tile>
          <v-card-title>Mapping Level 4</v-card-title>
          <v-card-text v-for="item in windowFive" v-bind:key="item.id">
            <tiptap-vuetify
              v-model="item.markdownContent"
              :extensions="extensions"
              :id="item.id"
              :toolbar-attributes="{ color: 'primary' }"
              placeholder="Mapping Level 4 ..."
            />
            <input
              type="hidden"
              :name="item.name"
              :value="item.markdownContent"
            />
          </v-card-text>
        </v-card>
        <v-card class="mx-auto ma-5 lastCard" max-width="1600">
          <v-card-title>Mapping Level 5</v-card-title>
          <v-card-text v-for="item in windowSix" v-bind:key="item.id">
            <tiptap-vuetify
              v-model="item.markdownContent"
              :extensions="extensions"
              :id="item.id"
              :toolbar-attributes="{ color: 'primary' }"
              placeholder="Mapping Level 5 ..."
            />
            <input
              type="hidden"
              :name="item.name"
              :value="item.markdownContent"
            />
          </v-card-text>
        </v-card>
        <v-btn
          class="submitBtn mx-16 white--text"
          style="float: right"
          type="submit"
          color="#0B72B1"
          tile
          >Submit</v-btn
        >
        <input type="hidden" name="editedpost" id="editedpost" :value="`${course}`">
        <input type="hidden" name="editmadeby" id="editmadeby" :value="`${$userName}`">
        <input type="hidden" name="editmadebyemail" id="editmadebyemail" :value="`${$email}`">
        <input type="hidden" name="editmadebyid" id="editmadebyid" :value="`${$userId}`">
      </form>
    </v-container>
  </div>
</template>

<script>
import {
  TiptapVuetify,
  Heading,
  Bold,
  Italic,
  Strike,
  Underline,
  Code,
  Paragraph,
  BulletList,
  OrderedList,
  ListItem,
  Link,
  Blockquote,
  HardBreak,
  HorizontalRule,
  History,
  Image,
  Table,
  TableCell,
  TableHeader,
  TableRow,
} from "tiptap-vuetify";
export default {
  components: {
    TiptapVuetify,
  },
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      step: 1,
      e1: 1,
      action: "/modules/edit/" + this.id,
      datepicker: new Date().toISOString().substr(0, 10),
      datepicker2: new Date().toISOString().substr(0, 10),
      extensions: [
        History,
        Table,
        TableCell,
        TableHeader,
        TableRow,
        Blockquote,
        Link,
        Underline,
        Strike,
        Italic,
        ListItem, // if you need to use a list (BulletList, OrderedList)
        BulletList,
        OrderedList,
        Image,
        [
          Heading,
          {
            // Options that fall into the tiptap's extension
            options: {
              levels: [1, 2, 3],
            },
          },
        ],
        Bold,
        Link,
        Code,
        HorizontalRule,

        Paragraph,
        HardBreak, // line break on Shift + Ctrl + Enter
      ],
      windowOne: [
        {
          name: "course",
          id: "course",
          info: "Enter course name",
          oldVal: this.course,
        },
        {
          name: "course_group",
          id: "course_group",
          info: "Enter course group",
          oldVal: this.course_group,
        },
        {
          name: "school",
          id: "school",
          info: "Enter school name",
          oldVal: this.school,
        },
        {
          name: "subject_community",
          id: "subject_community",
          info: "Enter subject community",
          oldVal: this.subject_community,
        },
      ],
      windowTwo: [
        {
          name: "level_of_highest_award",
          id: "level_of_highest_award",
          info: "Enter highest award",
          oldVal: this.level_of_highest_award,
        },
        {
          name: "named_interim_awards",
          id: "named_interim_awards",
          info: "Enter interm awards",
          oldVal: this.named_interim_awards,
        },
        {
          name: "mode_of_study",
          id: "mode_of_study",
          info: "Enter mode of study",
          oldVal: this.mode_of_study,
        },
        {
          name: "recognition_by_psrb",
          id: "recognition_by_psrb",
          info: "Enter recognition by psrb",
          oldVal: this.recognition_by_psrb,
        },
        {
          name: "date_of_initial_validation",
          id: "date_of_initial_validation",
          info: "Enter date of initial validation",
          oldVal: this.date_of_initial_validation,
        },
        {
          name: "date_last_amended",
          id: "date_last_amended",
          info: "Enter date last amended",
          oldVal: this.date_last_amended,
        },
      ],
      windowThree: [
        {
          name: "learning_outcomes",
          id: "learning_outcomes",
          markdownContent: this.learning_outcomes,
        },
      ],
      windowFour: [
        {
          name: "learning_teaching_method",
          id: "learning_teaching_method",
          markdownContent: this.learning_teaching_method,
        },
      ],
      windowFive: [
        {
          name: "management_of_quality_standards",
          id: "management_of_quality_standards",
          markdownContent: this.management_of_quality_standards,
        },
      ],
      windowSix: [
        {
          name: "admissions_requirements",
          id: "admissions_requirements",
          markdownContent: this.admissions_requirements,
        },
      ],
      windowSeven: [
        {
          name: "support_for_students_for_learning",
          id: "support_for_students_for_learning",
          markdownContent: this.support_for_students_for_learning,
        },
      ],
      windowEight: [
        {
          name: "other_external_reference",
          id: "other_external_reference",
          markdownContent: this.other_external_reference,
        },
      ],
      windowNine: [
        {
          name: "assessment_types",
          id: "assessment_types",
          markdownContent: "",
        },
      ],
    };
  },
  props: [
    "course",
    "course_group",
    "school",
    "subject_community",
    "date_of_initial_validation",
    "date_last_amended",
    "level_of_highest_award",
    "named_interim_awards",
    "mode_of_study",
    "qaa_subject_benchmark",
    "recognition_by_psrb",
    "other_external_reference",
    "learning_outcomes",
    "learning_teaching_method",
    "location_of_delivery",
    "admissions_requirements",
    "management_of_quality_standards",
    "support_for_students_for_learning",
    "current_course_map",
    "overall_assessment_approach",
    "student_experience_of_assessment",
    "id",
  ],
  computed: {
    currentTitle() {
      switch (this.step) {
        case 1:
          return "Module Outlines";
        case 2:
          return "Module Details";
        case 3:
          return "Learning Outcomes";
        case 4:
          return "Learning Teaching Method";
        case 5:
          return "Management of quality standards";
        case 6:
          return "Admissions requirements";
        case 7:
          return "Support for students";
        case 8:
          return "Other external reference";
      }
    },
  },
};
</script>

<style lang="scss" scoped>
a {
  text-decoration: none;
}
.v-btn {
  text-transform: none;
}
.topBorder {
  border-top: 8px solid #1ca691 !important;
}
</style>

