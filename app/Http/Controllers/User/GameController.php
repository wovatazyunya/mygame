<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class GameController extends Controller
{
  public function load()
  {
    return view('game.load');
  }

  public function top()
  {
    return view('game.top');
  }

  public function tutorial()
  {
    return view('game.tutorial');
  }

  public function playerSelect()
  {
    return view('game.playerSelect');
  }

  public function playGokurakutyou()
  {
    return view('game.playGokurakutyou');
  }

  public function winGokurakutyou()
  {
    return view('game.winGokurakutyou');
  }

  public function loseGokurakutyou()
  {
    return view('game.loseGokurakutyou');
  }

  public function playKujaku()
  {
    return view('game.playKujaku');
  }

  public function winKujaku()
  {
    return view('game.winKujaku');
  }

  public function losekujaku()
  {
    return view('game.loseKujaku');
  }

  public function playKatakake()
  {
    return view('game.playKatakake');
  }

  public function winKatakake()
  {
    return view('game.winKatakake');
  }

  public function loseKatakake()
  {
    return view('game.loseKatakake');
  }

  public function playKarasu()
  {
    return view('game.playKarasu');
  }

  public function winKarasu()
  {
    return view('game.winKarasu');
  }

  public function loseKarasu()
  {
    return view('game.loseKarasu');
  }

  public function shop()
  {
    return view('game.shop');
  }

  public function ending()
  {
    return view('game.ending');
  }

  public function result()
  {
    //dd("resultに入りました。");
    $record = Record::where('user_id', $user_id)
      ->firstOrFail();
    return response()->json(['total' => $user->total, 'current' => 10]);
  }
}
