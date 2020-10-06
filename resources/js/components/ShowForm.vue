<template>
  <div>
    
    <v-container>
      <v-btn class="white--text buttons" tile color="#0B72B1" style="top:-0.5em; text-decoration: none" href="/modules/all"> Back &nbsp;
      <v-icon color="blue">mdi-reply</v-icon>
    </v-btn>
    <v-btn class="white--text buttons" tile color="#0B72B1" style="top:-0.5em; text-decoration: none" @click.prevent="printme"> Print &nbsp;
      <v-icon color="blue">mdi-printer</v-icon>
    </v-btn>
    <div>
      <v-dialog v-model="deleteRecord" persistent max-width="290" dark>
        <template v-slot:activator="{ on, attrs }">
          <v-btn
            tile
            class="white--text buttons"
            color="#0B72B1"
            style="top:-3em; text-decoration: none; float: right"
            type="submit"
            v-bind="attrs"
            v-on="on"
          >Delete &nbsp;
            <v-icon color="red">mdi-delete</v-icon>
          </v-btn>
        </template>
        <v-card>
          <v-card-title class="headline">Delete {{course}}?</v-card-title>
          <v-card-text>Do you want to delete this module? You will have to re-enter the information again if you wish to recreate it.</v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="white" text @click="deleteRecord = false">Cancel</v-btn>
            <form :action="`${action}`" method="delete">
              <v-btn color="red darken-1" text @click="dialog = false" type="submit">Delete</v-btn>
            </form>
          </v-card-actions>
        </v-card>
      </v-dialog>
      <form>
        <v-tooltip top>
          <template v-slot:activator="{ on, attrs }">
            <v-btn
              tile
              class="white--text buttons"
              color="#0B72B1"
              style="right:0.3em; top:-3em; text-decoration: none; float: right"
              :href="'/modules/edit/'+`${id}`"
              type="submit"
              v-bind="attrs"
              v-on="on"
            >Edit &nbsp;
              <v-icon color="green">mdi-pen</v-icon>
            </v-btn>
          </template>
          <span>Edit record</span>
        </v-tooltip>
      </form>
    </div>
      <v-card tile >
        <v-breadcrumbs :items="items"><template v-slot:divider><v-icon>mdi-chevron-right</v-icon></template></v-breadcrumbs>

        <div style="display:inline-flex; width: 100%;">
        <h1 class="header ms-5" style="color: #188178">{{course}}</h1>
        <v-spacer></v-spacer>
        <v-avatar color="orange" class="mr-5" style="float: right; cursor: pointer" @click="expand = !expand">
          <span class="black--text headline">{{ creatorName }}</span>
        </v-avatar>
        <v-expand-transition>
        <v-card
          v-show="expand"
          class="mx-auto secondary"
          style="position:absolute; right: 1px; top: 8em"
        >
        <v-list-item-group color="primary">
          <v-list-item :href="/u/+`${created_by_id}`">
            <v-list-item-avatar color="orange">
              <span class="black--text headline">{{ creatorName }}</span>
            </v-list-item-avatar>
            <v-list-item-content>
              <v-list-item-title class="white--text">{{ created_by }}</v-list-item-title>
              <v-list-item-subtitle class="white--text">{{ created_by_email }}</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-list-item-group>
        </v-card>
      </v-expand-transition>
        </div>
        <v-divider></v-divider>
        <div class="lo" v-for="item in moduledata" v-bind:key="item.id" :id="`${item.name}`">
          <v-card-title class="mx-3">{{item.name}}</v-card-title>
          <v-card-text><div class="tiptap-vuetify-editor__content" v-html="`${item.info}`"/></v-card-text>
        </div>
      </v-card>
    </v-container>


  </div>
</template>


<script>
export default {
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
    "created_by",
    "created_by_id",
    "created_by_email"
  ],
  data() {
    return {
      action: "/modules/delete/" + this.id,
      creatorName: this.created_by.substring(0,1),
      dialog: false,
      expand: false,
      lo_dialog: false,
      deleteRecord: false,
      items: [
        {
          text: 'Home',
          disabled: false,
          href: '/',
        },
        {
          text: 'Modules',
          disabled: false,
          href: 'all',
        },
        {
          text: this.course,
          disabled: true,
        },
      ],
      moduledata: [
        {name: "Learning Outcomes", info: this.learning_outcomes,},
        {name: "Learning Teaching Method", info: this.learning_teaching_method,},
        {name: "Admissions requirements", info: this.admissions_requirements},
        {name: "Management of quality standards", info: this.management_of_quality_standards},
        {name: "Support for students", info: this.support_for_students_for_learning},
        {name: "Other external reference", info: this.other_external_reference},
        
      ]
    };
  },
  methods: {
      printme() {
        window.print();
      },
      print(id) {
        this.$htmlToPaper(id);
    }
    }
};
</script>

<style>
.buttons {
  text-transform: none;
}
</style>










































