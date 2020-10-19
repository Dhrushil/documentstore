<template>
  <div>
    <v-container>
      <h1>Definitive Documentation Store - Create Form</h1>
      <v-card class="mx-auto" max-width="1600" color="transparent" flat>
      
      </v-card>
      <form method="post" action="/modules" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="csrf" />
        <div>
          <v-btn tile href="/modules/all" dark color="#0B72B1" class="lowerBtn" style="left: 5.0em; position: fixed">Back</v-btn>
          <v-btn class="submitBtn  white--text" style="float:right; right: 4em; position: fixed;" type="submit" color="#0B72B1" tile >Submit</v-btn>
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
      

<input
              type="hidden"
              name="learning_outcomes"
              :value="html"
            />
        
        <input type="hidden" name="created_by" id="created_by" :value="`${$userName}`">
        <input type="hidden" name="created_by_email" id="created_by_email" :value="`${$email}`">
        <input type="hidden" name="created_by_id" id="created_by_id" :value="`${$userId}`">
        
        </div>
      </form>


  <v-card class="mx-auto ma-5 lastCard" max-width="1600">
          <v-card-title>Mapping Level 5</v-card-title>
          	<div class="editor">
		<editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
			<div class="menubar">
				<div class="toolbar">
					<button
						class="menubar__button"
						@click="commands.undo"
					>
                    <v-icon>mdi-undo</v-icon>
					</button>

					<button
						class="menubar__button"
						@click="commands.redo"
					>
                    <v-icon>mdi-redo</v-icon>
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.bold() }"
						@click="commands.bold"
					>
                     <v-icon>mdi-format-bold</v-icon>
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.italic() }"
						@click="commands.italic"
					>
                     <v-icon>mdi-format-italic</v-icon>
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.strike() }"
						@click="commands.strike"
					>
                     <v-icon>mdi-format-strikethrough</v-icon>
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.underline() }"
						@click="commands.underline"
					>
                     <v-icon>mdi-format-underline</v-icon>
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.heading({ level: 1 }) }"
						@click="commands.heading({ level: 1 })"
					>
						H1
					</button>

                    <button
						class="menubar__button"
						:class="{ 'is-active': isActive.code_block() }"
						@click="commands.code_block"
					>
						<v-icon>mdi-code-tags</v-icon>
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.heading({ level: 2 }) }"
						@click="commands.heading({ level: 2 })"
					>
						H2
					</button>

					<button
						class="menubar__button"
						:class="{ 'is-active': isActive.heading({ level: 3 }) }"
						@click="commands.heading({ level: 3 })"
					>
						H3
					</button>


					<button
						class="menubar__button"
						@click="commands.createTable({rowsCount: 3, colsCount: 3, withHeaderRow: false })"
					>
						<img src="../../assets/images/icons/table.svg" class="ma-1">
					</button>

					<span v-if="isActive.table()">
						<button
							class="menubar__button"
							@click="commands.deleteTable"
						>
							<img src="../../assets/images/icons/delete_table.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.addColumnBefore"
						>
                        <img src="../../assets/images/icons/add_col_before.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.addColumnAfter"
						>
                         <img src="../../assets/images/icons/add_col_after.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.deleteColumn"
						>
                         <img src="../../assets/images/icons/delete_col.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.addRowBefore"
						>
                         <img src="../../assets/images/icons/add_row_before.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.addRowAfter"
						>
                         <img src="../../assets/images/icons/add_row_after.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.deleteRow"
						>
                         <img src="../../assets/images/icons/delete_row.svg" class="ma-1">
						</button>
						<button
							class="menubar__button"
							@click="commands.toggleCellMerge"
						>
                         <img src="../../assets/images/icons/combine_cells.svg" class="ma-1">
						</button>
					</span>
				</div>
			</div>
		</editor-menu-bar>
    <v-container>
		<editor-content class="editor__content" :editor="editor" />
    </v-container>
    
	</div>
        </v-card>



    </v-container>

  </div>
</template>

<script>
import { Editor, EditorContent, EditorMenuBar } from 'tiptap'
import {
  Blockquote,
		CodeBlock,
		HardBreak,
		Heading,
		OrderedList,
		BulletList,
		ListItem,
		TodoItem,
		TodoList,
		Bold,
		Code,
		Italic,
		Link,
		Table,
		TableHeader,
		TableCell,
		TableRow,
		Strike,
		Underline,
		History,
} from 'tiptap-extensions'

export default {
  components: {
    EditorContent,
    EditorMenuBar,
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
      editor: new Editor({
					extensions: [
						new Blockquote(),
						new BulletList(),
						new CodeBlock(),
						new HardBreak(),
						new Heading({ levels: [1, 2, 3] }),
						new ListItem(),
						new OrderedList(),
						new TodoItem(),
						new TodoList(),
						new Link(),
						new Bold(),
						new Code(),
						new Italic(),
						new Strike(),
						new Underline(),
						new History(),
						new Table({
							resizable: false,
						}),
						new TableHeader(),
						new TableCell(),
						new TableRow(),
					],
					content: `
            
          `,
          onUpdate: ({ getJSON, getHTML }) => {
          this.json = getJSON()
          this.html = getHTML()
        },
        }),
        json: 'Update content to see changes',
        html: 'Update content to see changes',
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

<style lang="scss">

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-touch-callout: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;

  &:focus {
    outline: none;
  }
}

.editor{ 

table {
      border-collapse: collapse;
      table-layout: fixed;
      width: 100%;
      margin: 0;
      overflow: hidden;

      td, th {
        min-width: 1em;
        border: 2px solid grey;
        padding: 3px 5px;
        vertical-align: top;
        box-sizing: border-box;
        position: relative;
        > * {
          margin-bottom: 0;
        }
      }

      th {
        font-weight: bold;
        text-align: left;
      }

      .selectedCell:after {
        z-index: 2;
        position: absolute;
        content: "";
        left: 0; right: 0; top: 0; bottom: 0;
        background: rgba(200, 200, 255, 0.4);
        pointer-events: none;
      }

      .column-resize-handle {
        position: absolute;
        right: -2px; top: 0; bottom: 0;
        width: 4px;
        z-index: 20;
        background-color: #adf;
        pointer-events: none;
      }
    }

     pre {
      padding: 0.7rem 1rem;
      border-radius: 5px;
      background: black !important;
      color: white !important;
      font-size: 0.8rem;
      overflow-x: auto;

      code {
        display: block;
        background-color: black !important;
        color: white !important;
      }
    }

    p code {
      padding: 0.2rem 0.4rem;
      border-radius: 5px;
      font-size: 0.8rem;
      font-weight: bold;
      background: rgba(black, 0.1);
      color: rgba(black, 0.8);
    }

}
</style>

<style>
  
</style>




