<?php

namespace App\Core\Processes;

use Carbon\Carbon;
use App\Models\GameRequest;
use App\Events\GameRequestAccepted;

class AcceptGameRequest
{
    public function __invoke(GameRequest $gameRequest)
    {
        $gameRequest->update([
            'accepted_at' => Carbon::now()
        ]);

        event(new GameRequestAccepted($gameRequest));
    }
}