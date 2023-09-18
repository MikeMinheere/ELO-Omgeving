@extends('layouts.app')

@section('content')
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
                    <p>Please log in to access the dashboard.</p>
                @endauth
            </div>
        </div>
    </div>
    <div style="left: 59px; top: 19px; position: absolute; color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">KLASSEN</div>
  </div>
  <button type="button" onclick="location.href='{{ url('profile') }}'" style="padding-top: 19px; padding-bottom: 19px; padding-left: 59px; padding-right: 85px; left: 616px; top: 332px; position: absolute; background: #318D7E; border-radius: 8px; overflow: hidden; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 26px; word-wrap: break-word">PROFIEL</div>
  </button>
  <img style="width: 885px; height: 480px; left: 96px; top: 418px; position: absolute" src="ELO\image\help.eventmobi.comhcarticle_attachments115020847848Screen_Shot_2017-06-02_at_4.59.20_PM-Dec-18-2020-08-04-23-70-PM.png" />
  <img style="width: 396px; height: 448px; left: 998px; top: 468px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border: 1px black solid" src="public/images/notifications.png" />
  <img style="width: 232px; height: 316px; left: 1131px; top: 33px; position: absolute; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 7px; border: 1px black solid" src="public/image/davinci-logo.jpg" />
  <div style="width: 1440px; height: 112px; padding-top: 41px; padding-bottom: 39px; padding-left: 96px; padding-right: 1006px; left: 0px; top: 18px; position: absolute; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="color: #318D7E; font-size: 32px; font-family: Newsreader; font-weight: 500; line-height: 32px; word-wrap: break-word">Engels Media & Techniek </div>
  </div>
  <div style="left: 96px; top: 251px; position: absolute; color: #318D7E; font-size: 32px; font-family: Newsreader; font-weight: 500; line-height: 32px; word-wrap: break-word">Goede onderwijzers, zij maken echt het verschil </div>
</div>
