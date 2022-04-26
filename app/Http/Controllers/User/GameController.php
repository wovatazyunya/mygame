<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use Auth;

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

  public function noUse()
  {
    return view('game.noUse');
  }

  public function cantUse()
  {
    return view('game.cantUse');
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

  public function playMaiko()
  {
    return view('game.playMaiko');
  }

  public function winMaiko()
  {
    return view('game.winMaiko');
  }

  public function loseMaiko()
  {
    return view('game.loseMaiko');
  }

  public function playTancyou()
  {
    return view('game.playTancyou');
  }

  public function winTancyou()
  {
    return view('game.winTancyou');
  }

  public function loseTancyou()
  {
    return view('game.loseTancyou');
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
    return view('game.shop', ['msg' => ""]);
  }

  public function ending()
  {
    return view('game.ending');
  }

  public function addpoint(Request $request)
  {
    //dd("resultに入りました。");
    // $record = Record::where('user_id', $user_id)
    //   ->firstOrFail();
    // return response()->json(['total' => $user->total, 'current' => 10]);
    //dd($request->point);
    $record = Auth::user()->record;
    $record->total_point += $request->point;
    $record->current_point += $request->point;
    $record->save();
    return redirect('/game/top');
  }

  public function buyMaiko(Request $request)
  {
    $point = 30;
    $record = Auth::user()->record;
    //
    // 買うフラグをfalseにしておく
    $buy = false;
    $msg = "";
    // 舞子鳥を買いたい場合
    if ($request->has('maikodori')) {
      if ($record->ex_char1) {
        //すでに買っている
        $msg = "もう買っています";
      } else if ($record->current_point < $point) {
        $msg = "ポイントが足りません";
      } else {
        // まだ買っていなくてポイントが足りているので買える
        $record->ex_char1 = 1;
        $buy = true;
      }
      // 丹頂を買いたい場合
    } else if ($request->has('tancyou')) {
      if ($record->ex_char2) {
        //すでに買っている
        $msg = "もう買っています";
      } else if ($record->current_point < $point) {
        $msg = "ポイントが足りません";
      } else {
        // まだ買っていなくてポイントが足りているので買える
        $record->ex_char2 = 1;
        $buy = true;
      }
    }
    // 買える場合はポイントを引いてトップページへ遷移
    if ($buy) {
      $record->current_point -= $point;
      $record->save();
      return redirect('game/top');
    } else {
      // 買えない場合はメッセージを持ってショップページへ戻る
      return view('game.shop', ['msg' => $msg]);
    }
  }
}
