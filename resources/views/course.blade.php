<!DOCTYPE html>
<html>

<head>
 {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
   
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" </head>
</head>

<body>
    <section >
        <div>

            @include('layouts.header')



        </div>
        <div class="main-section" style="flex-wrap:nowrap">
            <img src="{{ asset('image/photoes.png') }}" alt="Navigation" class="sidebar-nav" />
       
            <div class="registration-section">
                <header class="registration-header">
                    <h1 class="registration-title">التسجيل في المسار</h1>
                    <div class="close-icon-wrapper">
                        <img src="{{ asset('image/arrow.svg') }}" alt="Close Icon" class="close-icon" />
                    </div>
                </header>
                <div class="">
                    <div class="progress-steps">
                        <div class="step">
                            <span class="step-text">اختيار المدرس</span>
                            <span class="step-number">2</span>
                        </div>
                        <div class="progress-line"></div>
                        <div class="step">
                            <span class="step-text">بيانات الخطة</span>
                            <span class="step-number">1</span>
                        </div>
                    </div>
                    <div>
                        <div class="selection-header">
                            <div class="error-icon">
                                <img src="{{ asset('image/love.svg') }}" alt="Error" class="icon" />
                            </div>
                            <div class="info-icon">
                                <img src="{{ asset('image/search.svg') }}" alt="Info" class="icon" />
                            </div>
                        </div>
                        <div class="teacher-cards">
                            <article class="teacher-card">
                                <img src="{{ asset('image/qara.png') }}" alt="Teacher محمد أحمد"
                                    class="teacher-image" />
                                <div class="teacher-info">
                                    <h2 class="teacher-name">محمد أحمد</h2>
                                    <p class="teacher-description">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر او
                                        سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                                </div>
                                <hr class="divider" />
                                <div class="teacher-details">
                                    <p class="teacher-specialty">الاختصاص : الاسم هنا</p>
                                    <p class="teacher-readings">القراءات : اسم 1 - اسم 2 - اسم 3</p>
                                    <div class="rating">
                                        <img src="{{ asset('image/star.svg') }}"alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star2.svg') }}" alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}"" alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}" alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}" alt="Star" class="star-icon" />
                                    </div>
                                </div>
                                <img src="{{ asset('image/love.svg') }}" alt="Favorite" class="favorite-icon" />
                            </article>
                            <article class="teacher-card">
                                <img src="{{ asset('image/qara.png') }}" alt="Teacher محمد أحمد"
                                    class="teacher-image" />
                                <div class="teacher-info">
                                    <h2 class="teacher-name">محمد أحمد</h2>
                                    <p class="teacher-description">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر او
                                        سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                                </div>
                                <hr class="divider" />
                                <div class="teacher-details">
                                    <p class="teacher-specialty">الاختصاص : الاسم هنا</p>
                                    <p class="teacher-readings">القراءات : اسم 1 - اسم 2 - اسم 3</p>
                                    <div class="rating">
                                        <img src="{{ asset('image/star.svg') }}"alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star2.svg') }}" alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}"" alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}" alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}" alt="Star" class="star-icon" />
                                    </div>
                                </div>
                                <img src="{{ asset('image/love.svg') }}" alt="Favorite" class="favorite-icon" />
                            </article>
                            <article class="teacher-card">
                                <img src="{{ asset('image/qara.png') }}" alt="Teacher محمد أحمد"
                                    class="teacher-image" />
                                <div class="teacher-info">
                                    <h2 class="teacher-name">محمد أحمد</h2>
                                    <p class="teacher-description">يمكن اضافة لمحة عن المدرس هنا حيث يمكن ان تكون سطر
                                        او سطرين بحيث لا تتجاوز اكثر حسب المسافرة المتوفرة لدينا</p>
                                </div>
                                <hr class="divider" />
                                <div class="teacher-details">
                                    <p class="teacher-specialty">الاختصاص : الاسم هنا</p>
                                    <p class="teacher-readings">القراءات : اسم 1 - اسم 2 - اسم 3</p>
                                    <div class="rating">
                                        <img src="{{ asset('image/star.svg') }}"alt="Star" class="star-icon" />
                                        <img src="{{ asset('image/star2.svg') }}" alt="Star"
                                            class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}"" alt="Star"
                                            class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}" alt="Star"
                                            class="star-icon" />
                                        <img src="{{ asset('image/star3.svg') }}" alt="Star"
                                            class="star-icon" />
                                    </div>
                                </div>
                                <img src="{{ asset('image/love.svg') }}" alt="Favorite" class="favorite-icon" />
                            </article>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="button">حفظ الخطة</button>
                        <button class="button">السابق</button>
                    </div>
                </div>

            </div>
            @include('layouts.nav')

            </ul>


        </div>
    </section>
</body>
</html>