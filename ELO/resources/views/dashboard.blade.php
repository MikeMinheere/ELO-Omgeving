@extends('layouts.app')

@section('content')
<div style="width: 1519px; height: 2092px; position: relative; background: white">
  <div style="width: 1370px; height: 1615.50px; left: 25px; top: 26.50px; position: absolute; background: linear-gradient(180deg, #318D7E 0%, #8CBE8D 100%); border-radius: 20px"></div>
  <div style="width: 1274px; height: 1135px; left: 61px; top: 440px; position: absolute; background: linear-gradient(180deg, white 0%, #FFFFFF 100%); border-radius: 40px"></div>
  <div style="width: 1020px; left: 94px; top: 152px; position: absolute; color: black; font-size: 64px; font-family: Newsreader; font-weight: 400; line-height: 76.80px; word-wrap: break-word">Welcome, {{ Auth::user()->name }}!</div>
  <div style="padding-top: 6px; padding-bottom: 6px; padding-left: 44px; padding-right: 43px; left: 96px; top: 332px; position: absolute; background: #318D7E; border-radius: 8px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
    <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">OPDRACHTEN</div>
    <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">OVERZICHT</div>
  </div>
  <div style="padding-top: 19px; padding-bottom: 19px; padding-left: 59px; padding-right: 75px; left: 361px; top: 332px; position: absolute; background: #318D7E; border-radius: 8px; overflow: hidden; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">KLASSEN</div>
  </div>
  <div style="padding-top: 19px; padding-bottom: 19px; padding-left: 59px; padding-right: 85px; left: 616px; top: 332px; position: absolute; background: #318D7E; border-radius: 8px; overflow: hidden; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">PROFIEL</div>
  </div>
  <img style="width: 855px; height: 370px; left: 85px; top: 522px; position: absolute" src="https://via..com/855x370" />
  <img style="width: 331px; height: 370px; left: 949px; top: 522px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 1px black solid" src="https://via.placeholder.com/331x370" />
  <div style="width: 1440px; height: 372px; left: 0px; top: 1720px; position: absolute; background: #D9D9D9"></div>
  <div style="width: 328px; height: 64px; left: 51px; top: 1888px; position: absolute; background: #318D7E; border-radius: 8px; overflow: hidden">
    <div style="padding: 10px; left: 22px; top: 9px; position: absolute; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="justify-content: center; align-items: center; gap: 10px; display: flex">
        <div></div>
      </div>
    </div>
    <div style="left: 59px; top: 19px; position: absolute; color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">NEEM CONTACT OP!</div>
  </div>
  <div style="width: 1440px; height: 188px; padding-top: 41px; padding-bottom: 115px; padding-left: 96px; padding-right: 1006px; left: 0px; top: 58px; position: absolute; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="color: white; font-size: 32px; font-family: Newsreader; font-weight: 500; line-height: 32px; word-wrap: break-word">Engels Media & Techniek </div>
  </div>
  <img style="width: 232px; height: 316px; left: 1163px; top: 1730px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 7px; border: 1px black solid" src="https://via.placeholder.com/232x316" />
  <div style="left: 96px; top: 251px; position: absolute; color: white; font-size: 32px; font-family: Newsreader; font-weight: 500; line-height: 32px; word-wrap: break-word">Goede onderwijzers, zij maken echt het verschil </div>
  <div style="width: 1440px; height: 68px; left: -46px; top: 1764px; position: absolute"></div>
  <div style="left: 49px; top: 1816px; position: absolute; color: #318D7E; font-size: 32px; font-family: Newsreader; font-weight: 500; line-height: 32px; word-wrap: break-word">Wil jij contact opnemen?</div>
  <div style="left: 53px; top: 2022px; position: absolute; color: #318D7E; font-size: 32px; font-family: Newsreader; font-weight: 500; line-height: 32px; word-wrap: break-word">© Davinci 2023 - Engels Media &  Techniek</div>
  <img style="width: 334px; height: 289px; left: 966px; top: 84px; position: absolute" src="image/logo.png" />
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Dashboard</h1>
                @auth
                    <p>Welcome, {{ Auth::user()->name }}!</p>

                    <!-- Progress Information -->
                    <section class="progress-section">
                        <h2>Your Progress</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                        <p>Complete your assignments to track your progress.</p>
                    </section>

                    <!-- Assignments -->
                    <section class="assignments-section">
                        <h2>Assignments</h2>
                        @if(isset($assignedAssignments) && is_countable($assignedAssignments) && count($assignedAssignments) > 0)
                            <ul>
                                @foreach ($assignments as $assignment)
                                    <li><a href="{{ route('assignments.show', $assignment->id) }}">{{ $assignment->title }}</a></li>
                                @endforeach
                            </ul>
                        @else
                            <p>No assignments available.</p>
                        @endif
                    </section>
                @else
                    
                @endauth
            </div>
        </div>
    </div>
  </div>
