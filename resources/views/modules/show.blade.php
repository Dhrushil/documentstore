@extends('layouts.app')

@section('content')

<v-container>
    <v-card dark>

        <v-card-title class="text-xs-center">{{$module->course}} - {{$module->course_group}}

            <v-spacer></v-spacer>
            <v-chip>{{$module->named_interim_awards}}</v-chip>&nbsp;
            <v-chip>{{$module->level_of_highest_award}}</v-chip>&nbsp;
            <v-chip>{{$module->mode_of_study}}</v-chip>&nbsp;
            <v-chip>{{\Carbon\Carbon::parse($module->updated_at)->format('d/m/Y')}}</v-chip>
        </v-card-title>
        <v-card-subtitle>{{$module->school}}</v-card-subtitle>
        <v-menu transition="scale-transition">
            <template v-slot:activator="{ on, attrs }">
                <v-btn color="primary" style="border-radius: 20px; height: 4.5em; left: -3em; display:block" class="ma-2" v-bind="attrs" v-on="on">
                    LO
                </v-btn>
            </template>
            <v-card dark>{{$module->learning_outcomes}}
            </v-card>
        </v-menu>
        <v-menu transition="scale-transition">
            <template v-slot:activator="{ on, attrs }">
                <v-btn color="primary" style="border-radius: 20px; height: 4.5em; left: -3em; display:block" class="ma-2" v-bind="attrs" v-on="on">
                    MQS
                </v-btn>
            </template>
            <v-card dark>{{$module->management_of_quality_standards}}
            </v-card>
        </v-menu>
        

    </v-card>
</v-container>

@endsection