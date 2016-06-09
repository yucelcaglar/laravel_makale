    @if($errors->any())

      <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
          <li>{{ $message }}</li>
        @endforeach
      </div>
    @endif

    @if(session()->has('succes'))

        <div class="alert alert-success" role="alert">{{ session()->get('succes') }}
        </div>

    @endif
