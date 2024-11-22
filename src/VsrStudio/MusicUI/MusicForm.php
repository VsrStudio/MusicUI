<?php

namespace VsrStudio\MusicUI;

use pocketmine\form\Form;
use pocketmine\player\Player;

class MusicForm {

    public function getMusicForm(): Form {
        return new class implements Form {
            public function jsonSerialize(): array {
                return [
                    "type" => "custom_form",
                    "title" => "Music UI",
                    "content" => [
                        [
                            "type" => "input",
                            "text" => "Enter Song URL (MP3):",
                            "placeholder" => "Example: https://example.com/song.mp3"
                        ],
                        [
                            "type" => "slider",
                            "text" => "Set Volume (0 - 100):",
                            "min" => 0,
                            "max" => 100,
                            "default" => 50
                        ],
                        [
                            "type" => "slider",
                            "text" => "Bass (0 - 10):",
                            "min" => 0,
                            "max" => 10,
                            "default" => 5
                        ],
                        [
                            "type" => "slider",
                            "text" => "Treble (0 - 10):",
                            "min" => 0,
                            "max" => 10,
                            "default" => 5
                        ]
                    ]
                ];
            }

            public function handleResponse(Player $player, $data): void {
                if ($data !== null) {
                    $url = $data[0];
                    $volume = (int)$data[1];
                    $bass = (int)$data[2];
                    $treble = (int)$data[3];

                    if (filter_var($url, FILTER_VALIDATE_URL)) {
                        $player->sendMessage("URL received: $url");
                        $player->sendMessage("Volume set to: $volume%");
                        $player->sendMessage("Bass: $bass | Treble: $treble");
                        $this->processMusic($player, $url, $volume, $bass, $treble);
                    } else {
                        $player->sendMessage("Invalid URL, please try again.");
                    }
                }
            }

            private function processMusic(Player $player, string $url, int $volume, int $bass, int $treble): void {
                $player->sendMessage("Processing song with settings: Volume $volume%, Bass $bass, Treble $treble.");
            }
        };
    }
}
