<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <form action="post" method="POST">
        @csrf
        <div class="form-group">
          <label for="vezeteknev">vezetéknév</label>
          <input type="text" class="form-control @error('vezeteknev') is-invalid @enderror" id="vezeteknev" placeholder="vezetéknév" name="vezeteknev" value="{{ old('vezeteknev') }}">

          @error('vezeteknev')

    <div class="invalid-feedback">
        {{ $message }}
      </div>
@enderror
        </div>
        <div class="form-group">
            <label for="keresztnev">keresztnév</label>
            <input type="text" class="form-control @error('keresztnev') is-invalid @enderror" id="keresztnev" placeholder="keresztnév" name="keresztnev" value="{{ old('keresztnev') }}">
            @error('keresztnev')

            <div class="invalid-feedback">
                {{ $message }}
              </div>
        @enderror
        </div>  
        <div class="form-group">
          <label for="szuletesiev">születésiév</label>
          <input type="text" class="form-control @error('szuletesiev') is-invalid @enderror" id="szuletesiev" placeholder="születésiév" name="szuletesiev" value="{{ old('szuletesiev') }}">
          @error('szuletesiev')

          <div class="invalid-feedback">
              {{ $message }}
            </div>
      @enderror
        </div>
        <button type="submit" class="btn btn-primary">Mentes</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>