<?php

namespace App\Services;

class Message {

        public function askAge(): array {
                $array = [
                    'type' => 'text',
                    'text' => 'あなたの年齢を教えてください',
                    'quickReply' => [
                        'items' => [
                          [
                                'type' => 'action',
                                'action' => [
                                  'type' => 'message',
                                  'label' => '20代',
                                  'text' => '20代'
                                ]
                          ],
                          [
                                'type' => 'action',
                                'action' => [
                                  'type' => 'message',
                                  'label' => '30代',
                                  'text' => '30代'
                                ]
                          ],
                          [
                                'type' => 'action',
                                'action' => [
                                  'type' => 'message',
                                  'label' => '40代',
                                  'text' => '40代'
                                ]
                          ],
                          [
                                'type' => 'action',
                                'action' => [
                                  'type' => 'message',
                                  'label' => '50代',
                                  'text' => '50代'
                                ]
                          ]
                        ]
                    ]
                  ];
                return $array;
                }
        }