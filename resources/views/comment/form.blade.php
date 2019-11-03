
        @csrf
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea name="comment" id="comment" class="form-control" cols="60" rows="10">Enter comment...</textarea>
                <div>{{$errors->first('comment')}}</div>
            </div>