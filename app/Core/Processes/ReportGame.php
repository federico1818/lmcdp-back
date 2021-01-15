<?php

namespace App\Core\Processes;

use Auth;
use App\Models\Game;
use App\Models\Report;

class ReportGame
{
    public function __invoke(Game $game, array $attributes)
    {
        $report = new Report($attributes);

        $report->user_id = Auth::user()->id;

        $game->reports()->save($report);
    }
}