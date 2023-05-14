@extends('layouts.user_type.auth')

@section('content')

<!-- 
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script> -->


@if($msg)
{{ $msg}}
@endif

<style>

    .invite {
        background: #2b2f77;
background: -webkit-linear-gradient(0deg, #2b2f77 0%, #141852 50%, #070b34 100%);
background: linear-gradient(0deg, #2b2f77 0%, #141852 50%, #070b34 100%);
    }

    .custom-textarea {
        border-radius: 0.65rem;
    }
    </style>

<div class="col-lg-5 px-4">
      <div class="card h-100 invite">
          <span class="mask bg-gradient-dark border-radius-lg"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
            <h5 class="text-white font-weight-bolder mb-4 pt-2">Invite friends</h5>

        <form method="POST" action="{{ route('invite.send') }}">
        @csrf

        @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif

    <div>
        <label class="text-white font-weight-bolder" for="email">E-mail:</label>
        <div class="">
            <input  type="email" id="email" name="email" required class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
        </div>
    </div>

    <div>
        <label class="text-white font-weight-bolder pt-2" for="invitation_text">Invitation text:</label>
        <div class="">
        <textarea class="textarea custom-textarea" placeholder="Bio" id="invitation_text" name="invitation_text" required></textarea>
        </div>
    </div>

    <button class="btn text-white font-weight-bolder bg-gradient-dark btn-md mt-2 mb-2 invite-btn" type="submit">Invite</button>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- email invites -->

  <!-- already invited  -->

  <div class="col-lg-5 px-4 table-responsive p-0 card-body px-0 pt-0 pb-2">
  @if(session('emails'))
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Already invited friends : </th>
            </tr>
        </thead>
        <tbody>
            @foreach(session('emails') as $email)
                <tr>
                <td class="px-4">
                    <p class="text-xs font-weight-bold mb-0">{{ $email }}</p>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@if (session('blockUnlocked'))
    <p>New block unlocked!</p>
@endif
</div>

@endsection

