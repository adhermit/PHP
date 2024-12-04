<?php


function getGames(): array
{
    $games = [
        ["name" => 'GTA', "editor" => "Rockstar Games", "description" => "GTA is an open-world action-adventure game series known for its immersive storylines, vast urban landscapes, and gameplay."],
        ["name" => 'Class of Clans', "editor" => "Supercell", "description" => "Clash of Clans is a strategy-based mobile game where players build and expand their villages, train armies, and engage in battles with other players or clans."],
        ["name" => 'Call of duty', "editor" => "Activision", "description" => "Call of Duty is a first-person shooter series that spans various war scenarios, from historical World War II settings to futuristic battles."],
    ];

    return $games;
}

function getGamesByIndex($index)
{
    $games = getGames();

    return $games[$index];
};
