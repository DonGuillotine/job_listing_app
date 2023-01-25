<?php

    namespace App\Models;


    class Details{
        public static function all(){
            return [

                [
                    'id' => 1,
                    'title' => 'We want a Unity game developer',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula augue sit amet tristique pellentesque. Vivamus volutpat ullamcorper bibendum. Mauris posuere velit ac nisi pharetra, sed cursus ante tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                ],


                [
                    'id' => 2,
                    'title' => 'We want a React Developer',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula augue sit amet tristique pellentesque. Vivamus volutpat ullamcorper bibendum. Mauris posuere velit ac nisi pharetra, sed cursus ante tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                ]

                ];
        }
        public static function find($id){
            $list_of_jobs = self::all();
            foreach($list_of_jobs as $one_job){
                if($one_job['id'] == $id){
                    return $one_job;
                }
            }

        }
    }