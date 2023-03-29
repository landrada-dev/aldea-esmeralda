<div class="col-md-8 ml-auto mr-auto text-center">
    <h1 class="title title-hero">{{__('messages.titulohero')}}</h1>
    <h4>{{__('messages.subhero')}}</h4>
</div>
<div class="col-md-10 ml-auto mr-auto">
    
    <div class="card card-raised card-form-horizontal card-hero">
        <div class="card-body ">
            <form method="post" role="form" action="{{ route('leads') }}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="fullname" id="fullname" value="{{old('fullname')}}" placeholder="Nombre completo" class="form-control @error('fullname') is-invalid @enderror">
                            @error('fullname')
                                <strong class='text-danger'>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Teléfono" class="form-control @error('phone') is-invalid @enderror" required>
                                @error('phone')
                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="{{__('messages.correo')}}" class="form-control @error('email') is-invalid @enderror" required>
                            @error('email')
                            <span class="alert alert-danger alert-dismissible fade show invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <input type="submit" class="btn btn-primary btn-block btn-send" value="{{__('messages.enviar')}}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>