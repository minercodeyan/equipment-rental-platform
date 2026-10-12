<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Аренда гидроциклов и водных развлечений на Минском море. Гидроциклы, банан, ватрушка и SUP-доски.">
    <title>Wave — аренда гидроциклов на Минском море</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        .hero {
            background:
                linear-gradient(90deg, rgba(5, 20, 35, .85) 0%, rgba(5, 20, 35, .4) 55%, rgba(5, 20, 35, .1) 100%),
                url('https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?auto=format&fit=crop&w=2200&q=85')
                center 55% / cover no-repeat;
        }

        .service-card {
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 45px rgba(15, 23, 42, .1);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white text-slate-900">

<header class="absolute inset-x-0 top-0 z-20">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 lg:px-8">
        <a href="#" class="text-2xl font-extrabold tracking-tight text-white">
            WAVE<span class="text-cyan-400">.</span>
        </a>

        <nav class="hidden items-center gap-8 text-sm font-semibold text-white md:flex">
            <a href="#services" class="transition hover:text-cyan-300">Услуги</a>
            <a href="#prices" class="transition hover:text-cyan-300">Цены</a>
            <a href="#location" class="transition hover:text-cyan-300">Где мы</a>
        </nav>

        <a href="#contacts"
           class="rounded-full bg-cyan-400 px-5 py-3 text-sm font-bold text-slate-950 transition hover:bg-cyan-300">
            Связаться
        </a>
    </div>
</header>

<main>
    {{-- Первый экран --}}
    <section class="hero flex min-h-[680px] items-center sm:min-h-[760px]">
        <div class="mx-auto w-full max-w-7xl px-5 pb-12 pt-32 lg:px-8">
            <div class="max-w-3xl">
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold text-white backdrop-blur">
                    <span class="h-2 w-2 rounded-full bg-cyan-400"></span>
                    Минское море · Водный сезон
                </div>

                <h1 class="text-5xl font-extrabold leading-[1.05] tracking-tight text-white sm:text-6xl lg:text-7xl">
                    Твоя стихия.<br>
                    <span class="text-cyan-400">Твои правила.</span>
                </h1>

                <p class="mt-6 max-w-xl text-lg leading-8 text-slate-200 sm:text-xl">
                    Гидроциклы и водные развлечения для тех, кто не хочет проводить лето на берегу.
                </p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="#prices"
                       class="rounded-full bg-cyan-400 px-7 py-4 text-center font-extrabold text-slate-950 transition hover:bg-cyan-300">
                        Смотреть цены
                    </a>
                    <a href="#services"
                       class="rounded-full border border-white/40 bg-white/10 px-7 py-4 text-center font-bold text-white backdrop-blur transition hover:bg-white/20">
                        Наши развлечения
                    </a>
                </div>

                <div class="mt-12 flex flex-wrap gap-x-8 gap-y-4 text-sm font-medium text-white/90">
                    <span>✓ Быстрый инструктаж</span>
                    <span>✓ Для компании и семьи</span>
                    <span>✓ Яркие эмоции</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Преимущества --}}
    <section class="border-b border-slate-100 bg-white">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-5 py-9 sm:grid-cols-3 lg:px-8">
            <div>
                <p class="text-lg font-extrabold">Море впечатлений</p>
                <p class="mt-1 text-sm text-slate-500">Активный отдых вместо обычных выходных</p>
            </div>
            <div>
                <p class="text-lg font-extrabold">Развлечения на выбор</p>
                <p class="mt-1 text-sm text-slate-500">От скоростных заездов до спокойного SUP</p>
            </div>
            <div>
                <p class="text-lg font-extrabold">Удобная локация</p>
                <p class="mt-1 text-sm text-slate-500">Отдых на воде рядом с Минском</p>
            </div>
        </div>
    </section>

    {{-- Услуги --}}
    <section id="services" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="mb-12 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                <div>
                    <p class="text-sm font-extrabold uppercase tracking-[.2em] text-cyan-600">Выбирай свой формат</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Вода зовёт</h2>
                </div>
                <p class="max-w-md leading-7 text-slate-500">
                    Собирай друзей, выбирай развлечение и проводи лето так, как тебе нравится.
                </p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <article class="service-card overflow-hidden rounded-2xl bg-white shadow-sm">
                    <img
                        src="https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?auto=format&fit=crop&w=800&q=80"
                        alt="Гидроцикл на воде"
                        class="h-56 w-full object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold">Гидроцикл</h3>
                        <p class="mt-2 min-h-12 text-sm leading-6 text-slate-500">Скорость, манёвры и ветер в лицо.</p>
                        <p class="mt-5 text-lg font-extrabold">100 BYN <span class="text-sm font-medium text-slate-400">/ заезд</span></p>
                    </div>
                </article>

                <article class="service-card overflow-hidden rounded-2xl bg-white shadow-sm">
                    <img
                        src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=800&q=80"
                        alt="Водные развлечения"
                        class="h-56 w-full object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold">Банан</h3>
                        <p class="mt-2 min-h-12 text-sm leading-6 text-slate-500">Командный аттракцион и море смеха.</p>
                        <p class="mt-5 text-lg font-extrabold">Уточнить цену</p>
                    </div>
                </article>

                <article class="service-card overflow-hidden rounded-2xl bg-white shadow-sm">
                    <img
                        src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=800&q=80"
                        alt="Отдых на воде"
                        class="h-56 w-full object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold">Ватрушка</h3>
                        <p class="mt-2 min-h-12 text-sm leading-6 text-slate-500">Держись крепче — начинается веселье.</p>
                        <p class="mt-5 text-lg font-extrabold">Уточнить цену</p>
                    </div>
                </article>

                <article class="service-card overflow-hidden rounded-2xl bg-white shadow-sm">
                    <img
                        src="https://images.unsplash.com/photo-1502680390469-be75c86b636f?auto=format&fit=crop&w=800&q=80"
                        alt="SUP на воде"
                        class="h-56 w-full object-cover"
                    >
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold">SUP-доски</h3>
                        <p class="mt-2 min-h-12 text-sm leading-6 text-slate-500">Спокойный отдых и красивые виды.</p>
                        <p class="mt-5 text-lg font-extrabold">Уточнить цену</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Цены --}}
    <section id="prices" class="py-24">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-5 lg:grid-cols-2 lg:px-8">
            <div>
                <p class="text-sm font-extrabold uppercase tracking-[.2em] text-cyan-600">Без сюрпризов</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Отдых, который стоит того</h2>
                <p class="mt-5 max-w-lg leading-7 text-slate-500">
                    Выбирай активность под настроение. Для нескольких развлечений можно уточнить условия и стоимость заранее.
                </p>
                <a href="#contacts"
                   class="mt-8 inline-flex rounded-full bg-slate-900 px-7 py-4 font-bold text-white transition hover:bg-slate-700">
                    Узнать подробности
                </a>
            </div>

            <div class="rounded-3xl border border-slate-200 p-6 sm:p-8">
                <div class="flex items-center justify-between gap-4 border-b border-slate-100 py-5">
                    <div>
                        <p class="font-bold">Гидроцикл</p>
                        <p class="mt-1 text-sm text-slate-500">Заезд 5–10 минут</p>
                    </div>
                    <p class="text-xl font-extrabold">100 BYN</p>
                </div>

                <div class="flex items-center justify-between gap-4 border-b border-slate-100 py-5">
                    <div>
                        <p class="font-bold">Банан</p>
                        <p class="mt-1 text-sm text-slate-500">Для компании</p>
                    </div>
                    <p class="font-bold">По запросу</p>
                </div>

                <div class="flex items-center justify-between gap-4 border-b border-slate-100 py-5">
                    <div>
                        <p class="font-bold">Ватрушка</p>
                        <p class="mt-1 text-sm text-slate-500">Катание за гидроциклом</p>
                    </div>
                    <p class="font-bold">По запросу</p>
                </div>

                <div class="flex items-center justify-between gap-4 py-5">
                    <div>
                        <p class="font-bold">SUP-доска</p>
                        <p class="mt-1 text-sm text-slate-500">Спокойный отдых на воде</p>
                    </div>
                    <p class="font-bold">По запросу</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Локация и контакты --}}
    <section id="location" class="bg-slate-950 py-24 text-white">
        <div class="mx-auto grid max-w-7xl gap-12 px-5 lg:grid-cols-2 lg:px-8">
            <div>
                <p class="text-sm font-extrabold uppercase tracking-[.2em] text-cyan-400">До встречи на воде</p>
                <h2 class="mt-3 text-3xl font-extrabold sm:text-4xl">Твоё лето начинается здесь</h2>
                <p class="mt-5 max-w-lg leading-7 text-slate-300">
                    Приезжай на Минское море за эмоциями. Перед поездкой свяжись с нами, чтобы уточнить доступность и время.
                </p>

                <div id="contacts" class="mt-8 space-y-4">
                    <p><span class="text-slate-400">Локация:</span> Минское море, Беларусь</p>
                    <p><span class="text-slate-400">Телефон:</span> добавь свой номер</p>
                    <p><span class="text-slate-400">Instagram / Telegram:</span> добавь ссылку</p>
                </div>

                <a href="https://yandex.com/maps/?text=Минское%20море"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="mt-8 inline-flex rounded-full bg-cyan-400 px-7 py-4 font-extrabold text-slate-950 transition hover:bg-cyan-300">
                    Открыть карту
                </a>
            </div>

            <div class="min-h-80 overflow-hidden rounded-3xl bg-slate-800">
                <iframe
                    title="Карта Минского моря"
                    src="https://maps.google.com/maps?q=Минское%20море%2C%20Беларусь&output=embed"
                    class="h-full min-h-80 w-full border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
</main>

<footer class="bg-slate-950 px-5 pb-8 text-slate-400">
    <div class="mx-auto flex max-w-7xl flex-col justify-between gap-3 border-t border-white/10 pt-6 text-sm sm:flex-row">
        <p>© {{ date('Y') }} WAVE. Водные развлечения.</p>
        <p>Минское море, Беларусь</p>
    </div>
</footer>
</body>
</html>
