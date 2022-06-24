<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>فرم انلاین ثبت نام همایش</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/myStyle.css') }}" />
  </head>
  <body>
    <div class="container-fluid bg-my-gradient">
      <div class="row align-items-center min-vh-100">
        <div class="col-sm-10 col-md-8 mx-auto">
          <div class="card px-3 py-4">
            
            <div>
              <a type="button" class="btn btn-success" href="{{ route('register.show') }}">دیدن لیست افراد ثبت نام شده</a>
              <button type="button" class="btn btn-warning" >تعداد افراد ثبت نام شده : {{ $registerNumber }}</button>
            </div>
            <div class="row align-items-center">
              <div class="col-md-7">
                <div class="px-3">
                  <h3 class="text-center text-primary mb-5">
                    فرم انلاین ثبت نام همایش
                  </h3>
                  <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <!--  -->
                    <div class="mb-3">
                      <label class="form-label fw-bold">
                        نام و نام خانوادگی:
                      </label>
                      <input
                        id="fullNameInput"
                        type="text"
                        class="form-control rounded-pill text-center"
                        value=""
                        name="fullname"
                      />
                      @error('fullname')
                        <div class="text-danger" >{{ $message }}</div>
                      @enderror
                    </div>
                    <!--  -->
                    <div class="mb-3">
                      <label class="form-label fw-bold">ایمیل:</label>
                      <input
                        id="emailInput"
                        type="email"
                        class="form-control rounded-pill text-center"
                        value=""
                        name="email"
                      />
                      @error('email')
                        <div class="text-danger" >{{ $message }}</div>
                      @enderror
                    </div>
                    <!--  -->
                    <button
                      id="submitBtn"
                      class="btn btn-success rounded-pill fw-bloder w-100 mt-3"
                    >
                      ثبت نام
                    </button>
                  </form>
                </div>
              </div>
              <div class="col-md-5 d-none d-md-block">
                <img
                  src="{{ asset('assets/img/loginImg.jpg') }}"
                  alt="loginImg"
                  style="width: 100%; object-fit: contain"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
  </body>
</html>
