<div class="container">
  {{-- <form> --}}
    <div class="row">
      <div class="col-9">
        <input type="text" class="form-control" placeholder="Comments" wire:model="newComment">
      </div>
      <div class="col-3">
        <input type="submit" class="form-control btn btn-primary" wire:click="addComment" value="Add">
      </div>
    </div>
  {{-- </form>   --}}
  <br>   
  {{$newComment}}
      <div class="card">
        <div class="card-body">
          @foreach($comments as $key => $comment)
            <div class="row">
                <div class="col-md-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" width="100" height="100" class="img img-rounded img-fluid"/>
                <p class="text-secondary text-center">{{$comment['created_at']}}</p>
                </div>
                <div class="col-md-10">
                  <p><strong>{{$comment['creator']}}</strong></p>
                   <div class="clearfix"></div>
                    <p>{{$comment['body']}}</p>
                </div>
            </div>
            @endforeach
          </div>
    </div>
</div>