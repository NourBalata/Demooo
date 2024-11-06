<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

</head>


<body>
    <section>
        <div>

            @include('layouts.header')



        </div>

        <div class="main-section"style="flex-wrap:nowrap">
            <img src="{{ asset('image/photoes.png') }}" alt="Navigation" class="sidebar-nav" />
            <form class="registration-form">
                <div class="form-container">
                    <h3 class="form-title">معلومات التسجيل</h3>
                    <div class="form-fields">
                        <div class="form-row">
                            <div class="form-field">
                                <div class="input-container">
                                    <input type="email" id="email" class="input-text" placeholder="user@gmail.com"
                                        aria-label="البريد الاكتروني" />
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ab8272f32b3fc551b86c89cb27871b303bbd358c906cf59eaebe73bee594e91e?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="Email icon" class="input-icon" />
                                </div>
                                <label for="email" class="input-label">البريد الاكتروني</label>
                            </div>
                            <div class="form-field">
                                <div class="input-container">
                                    <input type="text" id="username" class="input-text" placeholder="محمد احمد"
                                        aria-label="اسم المستخدم" />
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/4540e4690c3d0736587777b8e6d7a5b243c0f14410288964e19b37da22e3ebda?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="User icon" class="input-icon" />
                                </div>
                                <label for="username" class="input-label">اسم المستخدم</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field">
                                <div class="input-container">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbffc4212ee93b311ad47374e95ea85928214b815798326ce6c589c866887017?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="Calendar icon" class="input-icon" />
                                    <input type="text" id="birthdate" class="input-text"
                                        placeholder="15 / Aug / 1997" aria-label="تاريخ الميلاد" />
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6ba6f31f8156a7018d41c55b3dd26c85766d6b4c9f288612f92f46b1977173ea?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="Dropdown icon" class="input-icon" />
                                </div>
                                <label for="birthdate" class="input-label">تاريخ الميلاد</label>
                            </div>
                            <div class="form-field">
                                <div class="input-container">
                                    <input type="tel" id="phone" class="input-text" placeholder="+966123456789"
                                        aria-label="رقم الهاتف" />
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c1ca73ba36b697d291794087b4d2c098159797c733a2374ca1d8b291abc5b3e?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="Phone icon" class="input-icon" />
                                </div>
                                <label for="phone" class="input-label">رقم الهاتف</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="gender-field">
                                <div class="gender-options">
                                    <div class="gender-option">
                                        <input type="radio" id="male" name="gender" class="gender-input"
                                            value="male" />
                                        <label for="male" class="gender-label">ذكر</label>
                                    </div>
                                    <div class="gender-option">
                                        <input type="radio" id="female" name="gender" class="gender-input"
                                            value="female" />
                                        <label for="female" class="gender-label">انثى</label>
                                    </div>
                                </div>
                                <label class="gender-label">الجنس :</label>
                            </div>
                            <div class="form-field">
                                <div class="input-container">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbffc4212ee93b311ad47374e95ea85928214b815798326ce6c589c866887017?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="Location icon" class="input-icon" />
                                    <select id="country" class="input-text" aria-label="البلد">
                                        <option value="UAE">الامارات العربية المتحددة</option>
                                    </select>
                                </div>
                                <label for="country" class="input-label">البلد</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-field">
                                <div class="input-container">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbffc4212ee93b311ad47374e95ea85928214b815798326ce6c589c866887017?placeholderIfAbsent=true&apiKey=3aa84d0d823742b4a0b32eeea2044737"
                                        alt="Flag icon" class="input-icon" />
                                    <select id="nationality" class="input-text" aria-label="الجنسية">
                                        <option value="arabic">عربي</option>
                                    </select>
                                </div>
                                <label for="nationality" class="input-label">الجنسية</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-content">
                    <h2 class="form-title">معلومات إضافية</h2>
                    <div class="form-row">
                        <div class="form-field">

                            <lable class="call-recording-label">هل توافق على تسجيل المكالمات ؟</lable>
                            <div class="call-recording-options">
                                <div class="recording-option">
                                    <input type="radio" id="record-no" name="call-recording" value="no" />
                                    <label style="display:inline" for="record-no">لا</label>
                                    <input type="radio" id="record-yes" name="call-recording" value="yes" />
                                    <label style="display:inline" for="record-yes">نعم</label>
                                </div>


                            </div>
                        </div>
                        <div class="form-field">

                            <label for="quran-parts" class="quran-label">ما هو مقدار حفظك للقران (بالاجزاء)
                                ؟</label>
                            <div class="quran-counter">
                                <button type="button" class="counter-button"
                                    aria-label="Increase Quran parts">+</button>
                                <input type="number" id="quran-parts" class="counter-input" value="1"
                                    min="1" max="30" />
                                <button type="button" class="counter-button"
                                    aria-label="Decrease Quran parts">-</button>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-buttons">
                    <button type="submit" class="button">حفظ</button>
                    <button class="button"style="vertical-align:middle">تغيير كلمة المرور</button>
                </div>
            </form>
            <!-- </div>
      </div> -->

            {{-- create nav --}}

            @include('layouts.nav')
        </div>
        </div>
    </section>
</body>
</html>