<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{

    public function page_builder()
    {

        $page_builder = get_field('page_modules');

        $data = [];

        foreach ($page_builder as $block) {
            if ($block['acf_fc_layout'] == 'hero_module') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'background_image_repeater' => $block['background_image_repeater'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'basic_text') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'textbox' => $block['textbox'],
                    'button_link' => $block['button_link'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'icon_repeater') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'repeater_module' => $block['repeater_module'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'example_exposes') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'title'     =>  $block['title'],
                    'youtube_one' => $block['youtube_one'],
                    'youtube_two' => $block['youtube_two'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'picture_beside_textcontent') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'picture'     =>  $block['picture'],
                    'textcontent' => $block['textcontent'],
                    'pagelink' => $block['pagelink'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'contact_page') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'image'     =>  $block['image'],
                    'textcontent' => $block['textcontent'],
                    'title' => $block['title'],
                    'contact_form' => $block['contact_form'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'immobilien_page') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'immo_relations'     =>  $block['immo_relations'],
                    'title' => $block['title'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'immobilien_page_relation_home') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'immo_relations'     =>  $block['immo_relations'],
                    'title' => $block['title'],
                ];

                array_push($data, $this_block);

            } elseif ($block['acf_fc_layout'] == 'static_page') {

                $this_block = (object) [
                    'block_type' => $block['acf_fc_layout'],
                    'textcontent'     =>  $block['textcontent'],
                ];

                array_push($data, $this_block);

            } 

        }

        $data = (object) $data;

        return $data;
    }
}