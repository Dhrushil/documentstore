 <v-btn fab dark style="left:1em; top:0.5em; text-decoration: none" href="/modules/all">
    <v-icon color="blue">mdi-reply</v-icon>
</v-btn>
<div>
    
        <v-dialog v-model="dialog" persistent max-width="290" dark>
            <template v-slot:activator="{ on, attrs }">
                <v-btn fab dark style="right:5.5em; top:-3.5em; text-decoration: none; float: right" type="submit" v-bind="attrs" v-on="on">
                    <v-icon color="red">mdi-delete</v-icon>
                </v-btn>
            </template>
            <v-card>
        <v-card-title class="headline">Delete {{$module->course}}?</v-card-title>
        <v-card-text>Do you want to delete this module? You will have to re-enter the information again if you wish to recreate it.</v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="white" text @click="dialog = false">Cancel</v-btn>
          <form action="/modules/delete/{{$module->id}}" method="delete">
          <v-btn color="red darken-1" text @click="dialog = false" type="submit">Delete</v-btn>
          </form>
        </v-card-actions>
      </v-card>
        </v-dialog>
    <form>
        <v-tooltip top>
            <template v-slot:activator="{ on, attrs }">
                <v-btn fab dark style="right:6em; top:-3.5em; text-decoration: none; float: right" href="/modules/all" type="submit" v-bind="attrs" v-on="on">
                    <v-icon color="green">mdi-pen</v-icon>
                </v-btn>
            </template>
            <span>Edit record</span>
        </v-tooltip>
    </form>
</div>
<v-container>
    <v-card dark>
        <v-card-title class="text-xs-center">{!! ($module->course) !!} - {{$module->course_group}}
            <v-spacer></v-spacer>
            <v-chip>{{$module->named_interim_awards}}</v-chip>&nbsp;
            <v-chip>{{$module->level_of_highest_award}}</v-chip>&nbsp;
            <v-chip>{{$module->mode_of_study}}</v-chip>&nbsp;
            <v-chip>{{\Carbon\Carbon::parse($module->updated_at)->format('d/m/Y')}}</v-chip>
        </v-card-title>
        <v-card-subtitle>{{$module->school}}</v-card-subtitle>
        <v-menu transition="scale-transition">
            <template v-slot:activator="{ on, attrs }">
                <v-btn dark fab style="left: -3em; display:block" class="ma-2" v-bind="attrs" v-on="on">
                    <v-icon color="#bb86fc">mdi-book-open-variant</v-icon>
                </v-btn>
            </template>
            <v-card dark>{{$module->learning_outcomes}}
            </v-card>
        </v-menu>
        <v-menu transition="scale-transition">
            <template v-slot:activator="{ on, attrs }">
                <v-btn dark fab style="left: -3em; display:block" class="ma-2" v-bind="attrs" v-on="on">
                    <v-icon color="#03dac5">mdi-quality-high</v-icon>
                </v-btn>
            </template>
            <v-card dark>{{$module->management_of_quality_standards}}
            </v-card>
        </v-menu>

        {{$module->subject_community}}
        {{$module->date_of_initial_validation}}
        {{$module->date_last_amended}}

    </v-card>
</v-container>