<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Monitors</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h2>Фильтр</h2>
                <hr>
                <form>
                <p><b>Матрица</b></p>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="matrix[]" value="TN" @if (in_array('TN', request('matrix', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">TN</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="matrix[]" value="IPS" @if (in_array('IPS', request('matrix', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">IPS</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="matrix[]" value="AH-IPS" @if (in_array('AH-IPS', request('matrix', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">AH-IPS</label>
                </div>
                <hr>
                <p><b>Разрешение</b></p>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="resolution[]" value="1920x1080" @if (in_array('1920x1080', request('resolution', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">1920x1080</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="resolution[]" value="2560x1440" @if (in_array('2560x1440', request('resolution', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">2560x1440</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="resolution[]" value="3840x2160" @if (in_array('3840x2160', request('resolution', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">3840x2160</label>
                </div>
                <hr>
                <p><b>Частота</b></p>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="frequency[]" value="144" @if (in_array(144, request('frequency', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">144</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="frequency[]" value="120" @if (in_array(120, request('frequency', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">120</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="frequency[]" value="60" @if (in_array(60, request('frequency', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">60</label>
                </div>
                <hr>
                <p><b>Диагональ</b></p>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="diagonal[]" value="20" @if (in_array('20', request('diagonal', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">20"</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="diagonal[]" value="23" @if (in_array('23', request('diagonal', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">23"</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="diagonal[]" value="27" @if (in_array('27', request('diagonal', []))) checked @endif>
                    <label class="form-check-label" for="exampleCheck1">27"</label>
                </div>
                <button type="submit" class="btn btn-primary">Выбрать</button>
                <a href="/products" class="btn btn-secondary">Сбросить</a>
                </form>
            </div>
            <div class="col-9">
                <h1>Мониторы</h1>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="card-body ">
                                <h4>{{ $product->name }}</h4>
                                <img src="{{'img/display.jpg'}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><b>Матрица:</b> {{ $product->matrix }}</p>
                                    <p><b>Диагональ:</b> {{ $product->diagonal }}"</p>
                                    <p><b>Разрешение:</b> {{ $product->resolution }}</p>
                                    <p><b>Частота:</b> {{ $product->frequency }}Гц</p>
                                    <p><b>Серийный №:</b> {{ $product->serial }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

