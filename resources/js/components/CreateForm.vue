<template>
  <div>
    <v-container>
      <h1>Definitive Documentation Store - Create Form</h1>
      <v-card class="mx-auto" max-width="1600" color="transparent" flat>
      <v-btn tile href="/modules/all" dark color="#0B72B1" class="lowerBtn">Back
      </v-btn>
      </v-card>
      <form method="post" action="/modules" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="csrf" />
        <div>
        <v-card class="mx-auto ma-2 firstCard" max-width="1600">
          <v-card-title>Create Form</v-card-title>
          <v-card-text v-for="item in windowOne" v-bind:key="item.id">
            <v-text-field :name="`${item.name}`" :id="`${item.id}`" :placeholder="`${item.info}`"></v-text-field>
          </v-card-text>
        </v-card>
        <v-card class="mx-auto ma-5" max-width="1600" tile>
          <v-card-title>Module details</v-card-title>
          <v-card-text v-for="item in windowTwo" v-bind:key="item.id">
            <v-text-field :name="`${item.name}`" :id="`${item.id}`" :placeholder="`${item.info}`"></v-text-field>
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
            <input type="hidden" :name="item.name" :value="item.markdownContent">
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
                  placeholder="Learning outcomes ..."
            />
            <input type="hidden" :name="item.name" :value="item.markdownContent">
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
                  placeholder="Learning outcomes ..."
            />
            <input type="hidden" :name="item.name" :value="item.markdownContent">
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
                  placeholder="Learning outcomes ..."
            />
            <input type="hidden" :name="item.name" :value="item.markdownContent">
          </v-card-text>
        </v-card>


        
        <input type="hidden" name="created_by" id="created_by" :value="`${$userName}`">
        <input type="hidden" name="created_by_email" id="created_by_email" :value="`${$email}`">
        <input type="hidden" name="created_by_id" id="created_by_id" :value="`${$userId}`">
        <v-btn class="submitBtn mx-16 white--text" style="float:right;" type="submit" color="#0B72B1" tile >Submit</v-btn>
        </div>
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
  TableRow
} from 'tiptap-vuetify'
export default {
  components: {
    TiptapVuetify
  },
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      step: 1,
      windowOne: [
        {name: "course", id: "course", info: "Enter course name"},
        {name: "course_group", id: "course_group", info: "Enter course group"},
        {name: "school", id: "school", info: "Enter school name"},
        {name: "subject_community", id: "subject_community", info: "Enter subject community"},
      ],
      windowTwo: [
        {name: "level_of_highest_award", id: "level_of_highest_award", info: "Enter highest award"},
        {name: "named_interim_awards", id: "named_interim_awards", info: "Enter interm awards"},
        {name: "mode_of_study", id: "mode_of_study", info: "Enter mode of study"},
        {name: "recognition_by_psrb", id: "recognition_by_psrb", info: "Enter recognition by psrb"},
        {name: "date_of_initial_validation", id: "date_of_initial_validation", info: "Enter date of initial validation"},
        {name: "date_last_amended", id: "date_last_amended", info: "Enter date last amended"},
      ],
      windowThree: [
        {name: "learning_outcomes", id: "learning_outcomes", markdownContent: ""}
      ],
      windowFour: [
        {name: "learning_teaching_method", id: "learning_teaching_method", markdownContent: ""}
      ],
      windowFive: [
        {name: "mapping_level4", id: "mapping_level4", markdownContent: ""}
      ],
      windowSix: [
        {name: "mapping_level5", id: "mapping_level5", markdownContent: ""}
      ],
      windowSeven: [
        {name: "mapping_level6", id: "mapping_level6", markdownContent: ""}
      ],
      windowEight: [
        {name: "indicative_schedule", id: "indicative_schedule", markdownContent: ""}
      ],
      windowNine: [
        {name: "assessment_types", id: "assessment_types", markdownContent: ""}
      ],
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
            levels: [1, 2, 3]
          }
        }
      ],
      Bold,
      Link,
      Code,
      HorizontalRule,
      
      Paragraph,
      HardBreak // line break on Shift + Ctrl + Enter
    ],
    };
  },
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
          return "Mapping of Assessment Against Module Learning Outcomes - Level 4";
        case 6:
          return "Mapping of Assessment Against Module Learning Outcomes - Level 5";
      }
    },
  },
};
</script>


<style lang="scss">
a {
  text-decoration: none !important;
}
.firstCard{
  border-top: 8px solid #1E3C71!important
}
.topCard{
  border-top: 8px solid #1E3C71 !important
}
.lastCard{
  border-bottom: 8px solid #1E3C71 !important
}
.submitBtn {
  text-transform:none ;
  color: white;
}
.v-card .v-card__title {
  font-weight: 600;
}
.lowerBtn {
  text-transform: none !important;
  
}
</style>







-------- Old Code

<v-stepper v-model="e1" vertical dark>
          <//template v-for="module in modules">
            <v-stepper-step
              :key="`${module.step}-step`"
              :complete="e1 > module.step"
              :step="module.step"
              editable
            >{{module.info}}</v-stepper-step>
            <v-stepper-content :key="`${module.step}-content`" :step="module.step">
              <v-card
                class="mb-12"
                color="grey lighten-1"
                height="350px"
                v-if="module.class == 'markdown'"
              >
                <tiptap-vuetify
      v-model="module.markdownContent"
      :extensions="extensions"
      :id="module.id"
      :toolbar-attributes="{ color: '#bf1256' }"
    />
    <input type="hidden" :name="module.name" :value="module.markdownContent">
              </v-card>
              <v-card class="mb-12" height="30px" v-if="module.class == 'textfield'">
                <v-text-field
                  dark
                  solo
                  :name="module.name"
                  :id="module.id"
                  counter
                ></v-text-field>
              </v-card>
              <v-card
                class="mb-12"
                color="grey lighten-1"
                height="350px"
                width="290px"
                v-if="module.step == 4"
              >
                <v-date-picker
                  v-model="datepicker"
                  color="blue lighten-1"
                  header-color="primary"
                  id="date_of_initial_validation"
                ></v-date-picker>
                <v-text-field
                  v-model="datepicker"
                  value="datepicker"
                  id="date_of_initial_validation"
                  name="date_of_initial_validation"
                  style="display:none"
                ></v-text-field>
              </v-card>
              <v-card
                class="mb-12"
                color="grey lighten-1"
                height="350px"
                width="290px"
                v-if="module.step == 5"
              >
                <v-date-picker
                  v-model="datepicker2"
                  color="blue lighten-1"
                  header-color="primary"
                  id="date_last_amended"
                ></v-date-picker>
                <v-text-field
                  v-model="datepicker2"
                  value="datepicker2"
                  id="date_last_amended"
                  name="date_last_amended"
                  style="display:none"
                ></v-text-field>
              </v-card>
              <v-btn color="primary" @click="nextStep(module.step)">Continue</v-btn>
              <v-btn text @click="nextStep(-1)">Cancel</v-btn>
            </v-stepper-content>
          </template>
          <v-btn style="left:1em; top: 1.5em" color="primary" type="submit">Submit</v-btn>
        </v-stepper>






<vue-simplemde
                  ref="markdownEditor"
                  :name="module.name"
                  :id="module.id"
                  label="course"
                />

import {
  RichTextEditorPlugin,
  Toolbar,
  Link,
  Image,
  Count,
  HtmlEditor,
  QuickToolbar,
} from "@syncfusion/ej2-vue-richtexteditor";
Vue.use(RichTextEditorPlugin);

import VueSimplemde from "vue-simplemde";
import "simplemde/dist/simplemde.min.css";

Vue.component("vue-simplemde", VueSimplemde);


VueSimplemde,

provide: {
    richtexteditor: [Toolbar, Link, Image, Count, HtmlEditor, QuickToolbar],
  },



