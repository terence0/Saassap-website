<?php
class Mover
{

    public $goods  = array(
        "entranceHall" => array(
            "ent_chair" => 9,
            "clock_grand" => 40,
            "ent_hall_table" =>  10,
            "half_moon_table" => 10,
            "hat_stand" => 10,
            "tel_table" => 7,
            "wash_stand" => 17
        ),
        "lounge" => array(
            "one_seater" => 17,
            "two_seater" => 34,
            "three_seater" => 50,
            "four_seater" => 70,
            "cd_stand" => 3,
            "lounge_chair" => 7,
            "dstv_dish" => 5,
            "dstv_dvd_vcr" => 1,
            "hi_fi_speakers_large" => 5,
            "hi_fi_speakers_small" => 1,
            "hi_fi_stand" => 17,
            "lamp_large" => 7,
            "lamp_small" => 3,
            "organ" => 5,
            "ottoman" => 5,
            "piano_grand" => 70,
            "piano_upright" => 85,
            "show_case" => 38,
            "tv" => 4,
            "tv_big_screen" => 40,
            "tv_plasma" => 2,
            "table_coffee" => 8,
            "table_side" => 4,
            "tv_UnitM" => 17,
            "wall_unit_1pc" => 34,
            "wall_unit_2pc" => 70,
            "wall_unit_3pc" => 100
        ),
        "dining" => array(
            "cabinet_large" => 34,
            "cabinet_medium" => 17,
            "dining_room_chair" => 10,
            "dining_table_10_seater"  =>  65,
            "dining_table_4_seater" =>  17,
            "dining_table_6_seater" => 35,
            "dining_table_8_seater" =>  50,
            "hostess" => 10,
            "server" =>  25,
            "side_board" =>  34,
            "tea_trolley" =>  14,
            "welsh_dresser" =>  50,
        ),
        "family" => array(
            "bar_counter" =>  35,
            "bar_stool" => 5,
            "bar_unit_l"  =>  100,
            "bookcase_l"  => 26,
            "bookcase_m"  =>  12,
            "bookcase_s"  =>  7,
            "cabinet_s"  => 10,
            "coffee_table"  => 9,
            "side_tables"  => 4
        ),
        "study" => array(
            "cabinet_2_draw"  =>  9,
            "cabinet_4_draw"  =>  17,
            "carpets"  =>  3,
            "computers"  =>  5,
            "credenza"  =>  17,
            "desk_l"  =>  35,
            "desk_m"  =>  25,
            "desk_s"  =>  17,
            "drawing_board"  =>  50,
            "office_chair"  =>  12,
            "pillars"  =>  5
        ),
        "bedroom" => array(
            "bed_double"  => 35,
            "bed_queen"  => 41,
            "bed_single"  =>  17,
            "bed_sleeper_couch" =>  50,
            "chaise_lounge" =>  34,
            "chest_of_drawers" =>  20,
            "cheval_mirror" =>  17,
            "clothes_basket" =>  3,
            "cot_or_compactum" =>  34,
            "dres_table_l" =>  41,
            "dres_table_m" =>  31,
            "dumb_valet" =>  3,
            "exercise_bicycle" =>  17,
            "futon_double" =>  35,
            "futon_single" =>  19,
            "gym_all_in_one" =>  100,
            "headboard" =>  3,
            "health_walker" =>  10,
            "kist" =>  17,
            'pedestals' =>  7,
            "bedroom_tv" =>  4,
            "treadmil" =>  25,
            "wardrobe_2_door" =>  35,
            "wardrobe_3_door" =>  50
        ),

        "kitchen" => array(
            "bar_fridge" =>  9,
            "cabinet_s" =>  10,
            "chair" => 9,
            "clothes_airer" => 3,
            "dishwasher" =>  17,
            "fans" => 5,
            "freezer" =>  25,
            "fridge"  =>  25,
            'heaters'  =>  4,
            "ironing_board"  =>  2,
            "knitting_machine"  => 3,
            "microwave_oven"  =>  6,
            "polisher"  => 5,
            "sewing_machine"  =>  3,
            "stove_l"  => 25,
            "table"  => 17,
            "tumble_drier"  => 17,
            "v_cleaner"  => 5,
            "veggie_rack"  => 4,
            "washing_machine"  => 17
        ),

        "garage" => array(
            "bicycle" => 5,
            "bin" => 5,
            "bird_cage" => 17,
            "birdbath" => 2,
            "braai–gas" => 34,
            "braai–webber" => 17,
            "chair_stack" =>  3,
            "concrete_bench" => 17,
            "cooler_box" => 5,
            "fishing_rods" => 1,
            "garden_bench" => 17,
            "garden_ornaments" =>  5,
            "garden_statues"  => 11,
            "garden_table_wood"  => 35,
            "garden_tools"  => 1,
            "golf_bag_or_cart"  =>  9,
            "hose_pipe"  =>  1,
            "kennel_l"  => 50,
            "kennel_m"  => 35,
            "ladder"  => 5,
            "lathe_or_saw_bench"  => 38,
            "lawn_mower"  => 17,
            "lounger"  => 5,
            "steel_shelves" => 35,
            "suitcase" => 5,
            "table_plastic" => 3,
            "toolbox"  => 3,
            "trunks"  => 10,
            "umbrella"  => 12
        ),

        "miscelleneous" => array(
            "bean_bag" =>  3,
            "canoe" =>  35,
            "children_chair" =>  3,
            "children_table" =>  5,
            "fish_tank" =>  20,
            "jungle_gym" =>  150,
            "motor_bike" =>  100,
            "prams" =>  7,
            "safes" =>  5,
            "sandpit" =>  6,
            "snooker_table_half" =>  100,
            "snooker_table_quarter" => 75,
            "snooker_table" =>  150,
            "wendy_house" =>  100,
            "carpets" =>  3,
            "mirrors" =>  1,
            "ornaments" => 1,
            "paintings" =>  1,
            "pictures" =>  1,
            "pot_plant_stands" => 9,
            "pot_plants_l" =>  50,
            "pot_plants_m" =>  35,
            "pot_plants_s" =>  17,
            "crockery_boxes" =>  5,
            "general_boxes" =>  5,
            "linen_boxes" =>  10,
            "drobe_boxes" =>  10
        )

    );


    public function getKeys($name)
    {


        foreach ($this->goods[$name] as $x => $x_value) {
            // echo "Key=" . $x . ", Value=" . $x_value;
            // echo "<br>";
            echo '<li class="list-group-item ">
    <span class="my-auto">' . $this->convertToStudlyCaps($x) . ' </span> 
     <span class=" float-right">
         <input type="number" min="0" name="' . $x . '" id="' . $x . '" value="0">
     </span>
     </li>';
        }
    }

    public function getValue($name, $key_value)
        {
        foreach ($this->goods[$name] as $key => $x ) {
           if($key_value == $key){
               return $x;
           }
       
        }
    }

    public function convertToStudlyCaps($string)
    {
        return ucwords(str_replace('_', ' ', $string));
    }
}
