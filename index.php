<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVOLARIS — Full-stack и AI-разработка</title>
    <meta name="description" content="EVOLARIS — IT-студия полного цикла. Веб-приложения, AI и RAG-системы, CRM, e-commerce, мобильные приложения. От идеи до продакшена силами одной команды.">
    <link rel="icon" href="images/logo.webp" type="image/webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;1,400&family=Unbounded:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Перейти к содержимому</a>
<canvas id="stars" aria-hidden="true"></canvas>
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <defs>
        <linearGradient id="iconGrad" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#4fc7ec"/>
            <stop offset="100%" stop-color="#c04fe0"/>
        </linearGradient>
    </defs>
</svg>
<div class="site">
    <!-- ============================================================
    HEADER
    ============================================================ -->
    <header class="header">
        <div class="container">
            <a class="brand" href="#top" aria-label="EVOLARIS — на главную">
                <img class="brand__mark" src="images/logo.webp" alt="" width="38" height="38">
                <span class="brand__name">EVOLARIS</span>
            </a>
            <nav class="nav" aria-label="Основная навигация">
                <ul class="nav__links" id="navLinks" data-open="false">
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#process">Процесс</a></li>
                    <li><a href="#team">Команда</a></li>
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#stack">Стек</a></li>
                </ul>
                <a class="btn btn-primary btn-sm nav__cta" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Обсудить проект</a>
                <button class="nav__toggle" id="navToggle" aria-expanded="false" aria-controls="navLinks" aria-label="Открыть меню">
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
    <main id="main">
        <!-- ============================================================
        HERO
        ============================================================ -->
        <section class="hero" id="top">
            <div class="container">
                <div class="hero__text">
                    <p class="eyebrow hero__eyebrow">Full-stack &amp; AI студия</p>
                    <h1>От идеи до продакшена. <em>Одна команда, все слои.</em></h1>
                    <p class="hero__sub">Интерфейс, backend, данные и AI — мы проектируем и строим каждый слой сами. Никаких передач между подрядчиками и потерянного контекста.</p>
                    <div class="hero__cta">
                        <a class="btn btn-primary" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Обсудить проект</a>
                        <a class="btn btn-ghost" href="#portfolio">Смотреть портфолио</a>
                    </div>
                    <ul class="hero__trust">
                        <li><strong>14+</strong><span>лет опыта в команде</span></li>
                        <li><strong>4</strong><span>production-системы в портфолио</span></li>
                        <li class="note"><span>AI + инженерия, а не только генерация кода</span></li>
                    </ul>
                </div>
                <div class="stackviz" data-reveal aria-hidden="true">
                    <div class="stackviz__logo">
                        <img src="images/logo.webp" alt="">
                    </div>
                    <div class="stackviz__body">
                        <div class="stackviz__spine"></div>
                        <div class="stackviz__pulse"></div>
                        <ul class="stackviz__layers">
                            <li class="stackviz__layer">
                                <span class="stackviz__node"></span>
                                <div class="stackviz__card">
                                    <span class="stackviz__name">Интерфейс</span>
                                    <span class="stackviz__tags">Next.js · React · Angular</span>
                                </div>
                            </li>
                            <li class="stackviz__layer">
                                <span class="stackviz__node"></span>
                                <div class="stackviz__card">
                                    <span class="stackviz__name">Backend / API</span>
                                    <span class="stackviz__tags">Node.js · .NET · PHP</span>
                                </div>
                            </li>
                            <li class="stackviz__layer">
                                <span class="stackviz__node"></span>
                                <div class="stackviz__card">
                                    <span class="stackviz__name">Данные</span>
                                    <span class="stackviz__tags">MySQL · MongoDB · MSSQL</span>
                                </div>
                            </li>
                            <li class="stackviz__layer">
                                <span class="stackviz__node"></span>
                                <div class="stackviz__card">
                                    <span class="stackviz__name">AI-слой</span>
                                    <span class="stackviz__tags">LLM · RAG · LangChain</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================
        SERVICES
        ============================================================ -->
        <section class="section-alt" id="services">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="eyebrow">Услуги</p>
                    <h2>Что мы строим</h2>
                    <p>Шесть направлений, одна команда. Каждый проект ведут те же люди, что проектируют архитектуру и пишут код.</p>
                </div>
                <div class="services__grid">
                    <article class="service facet" data-reveal>
                        <svg class="icon" viewBox="0 0 24 24"><path d="M8 8L3.6 12L8 16M16 8L20.4 12L16 16M13.6 5.5l-3.2 13"/></svg>
                        <h3>Веб-приложения</h3>
                        <p>Быстрые интерфейсы и надёжный backend в одной связке — без разрыва между фронтом и сервером.</p>
                        <div class="service__tags">
                            <span class="tag">Next.js</span><span class="tag">React</span><span class="tag">Angular</span><span class="tag">Node.js</span><span class="tag">.NET</span><span class="tag">PHP</span>
                        </div>
                    </article>
                    <article class="service facet" data-reveal>
                        <svg class="icon" viewBox="0 0 24 24"><circle cx="12" cy="5" r="1.9"/><circle cx="5" cy="17.5" r="1.9"/><circle cx="19" cy="17.5" r="1.9"/><path d="M12 6.9V12M12 12l-5.6 4M12 12l5.6 4"/></svg>
                        <h3>AI и RAG-системы</h3>
                        <p>Встраиваем языковые модели в реальные процессы: поиск по знаниям компании, автоматизация, агенты с доступом к вашим данным.</p>
                        <div class="service__tags">
                            <span class="tag">LLM</span><span class="tag">LangChain</span><span class="tag">Vector DB</span><span class="tag">AI-агенты</span>
                        </div>
                    </article>
                    <article class="service facet" data-reveal>
                        <svg class="icon" viewBox="0 0 24 24"><rect x="3.5" y="3.5" width="7.5" height="7.5" rx="1.3"/><rect x="13" y="3.5" width="7.5" height="7.5" rx="1.3"/><rect x="3.5" y="13" width="7.5" height="7.5" rx="1.3"/><rect x="13" y="13" width="7.5" height="7.5" rx="1.3"/></svg>
                        <h3>CRM и внутренние системы</h3>
                        <p>Роли, доступы, аналитика — системы, которые наводят порядок внутри компании и растут вместе с ней.</p>
                        <div class="service__tags">
                            <span class="tag">Роли и доступы</span><span class="tag">Аналитика</span><span class="tag">Интеграции</span>
                        </div>
                    </article>
                    <article class="service facet" data-reveal>
                        <svg class="icon" viewBox="0 0 24 24"><path d="M5 8h14l-1.3 9.4a2 2 0 01-2 1.7H8.3a2 2 0 01-2-1.7L5 8z"/><path d="M9 8V6a3 3 0 016 0v2"/></svg>
                        <h3>E-commerce</h3>
                        <p>Каталог, корзина, заказы, оплата — от витрины до личного кабинета покупателя.</p>
                        <div class="service__tags">
                            <span class="tag">Каталог</span><span class="tag">Оплата</span><span class="tag">Заказы</span>
                        </div>
                    </article>
                    <article class="service facet" data-reveal>
                        <svg class="icon" viewBox="0 0 24 24"><rect x="6.5" y="2.8" width="11" height="18.4" rx="2.2"/><path d="M10.6 18.2h2.8"/></svg>
                        <h3>Мобильные приложения</h3>
                        <p>iOS и Android с push-уведомлениями и синхронизацией с вашей CRM в реальном времени.</p>
                        <div class="service__tags">
                            <span class="tag">iOS</span><span class="tag">Android</span><span class="tag">Push</span><span class="tag">Синхронизация</span>
                        </div>
                    </article>
                    <article class="service facet" data-reveal>
                        <svg class="icon" viewBox="0 0 24 24"><path d="M9 15l6-6M8.3 8.3L6.5 6.5a2.7 2.7 0 113.8-3.8l1.8 1.8M15.7 15.7l1.8 1.8a2.7 2.7 0 11-3.8 3.8l-1.8-1.8"/></svg>
                        <h3>API, интеграции, DevOps</h3>
                        <p>REST API, Docker, деплой — связываем сервисы и держим инфраструктуру под контролем.</p>
                        <div class="service__tags">
                            <span class="tag">REST API</span><span class="tag">Docker</span><span class="tag">Деплой</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- ============================================================
        PROCESS
        ============================================================ -->
        <section id="process">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="eyebrow">Как мы работаем</p>
                    <h2>Процесс</h2>
                    <p>Шесть последовательных этапов — от первого разговора до жизни проекта после запуска.</p>
                </div>
                <ol class="process">
                    <li class="process__step" data-reveal><span class="process__num">1</span><h3>Бриф</h3><p>Разбираемся в задаче, бизнесе и ограничениях, прежде чем предлагать решение.</p></li>
                    <li class="process__step" data-reveal><span class="process__num">2</span><h3>Архитектура</h3><p>Проектируем структуру системы: слои, интеграции, модель данных.</p></li>
                    <li class="process__step" data-reveal><span class="process__num">3</span><h3>Разработка</h3><p>Пишем код короткими итерациями и регулярно показываем прогресс.</p></li>
                    <li class="process__step" data-reveal><span class="process__num">4</span><h3>Тестирование</h3><p>Проверяем, ломаем, чиним — до релиза, а не после.</p></li>
                    <li class="process__step" data-reveal><span class="process__num">5</span><h3>Запуск</h3><p>Разворачиваем в продакшен без простоев для пользователей.</p></li>
                    <li class="process__step" data-reveal><span class="process__num">6</span><h3>Поддержка</h3><p>Остаёмся на связи после запуска: правки, доработки, рост.</p></li>
                </ol>
            </div>
        </section>
        <!-- ============================================================
        TEAM
        ============================================================ -->
        <section class="section-alt" id="team">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="eyebrow">Команда</p>
                    <h2>Люди, которые ведут проект</h2>
                    <p>Небольшая команда с реальным коммерческим опытом — без прослойки лишних ролей.</p>
                </div>
                <div class="team__grid">
                    <article class="member facet" data-reveal>
                        <div class="member__avatar" aria-hidden="true">Ю</div>
                        <div>
                            <span class="member__role">Менеджер проекта</span>
                            <h3>Юрий</h3>
                            <p>Ведёт коммуникацию с клиентом, планирует спринты и следит, чтобы сроки не расползались.</p>
                            <div class="service__tags"><span class="tag">Коммуникация</span><span class="tag">Планирование</span><span class="tag">Контроль сроков</span></div>
                        </div>
                    </article>
                    <article class="member facet" data-reveal>
                        <div class="member__avatar" aria-hidden="true">АЯ</div>
                        <div>
                            <span class="member__role">Full Stack &amp; AI Developer · Индия</span>
                            <h3>Адарш Ядав</h3>
                            <p>Совмещает full-stack и AI-разработку. Построил AI-платформу Manage One AI (по проекту опубликована исследовательская работа) и систему TaskFlow Pro. Самостоятельно сдал клиенту e-commerce проект под ключ — от интерфейса до базы данных и интеграций.</p>
                            <div class="service__tags"><span class="tag">Next.js</span><span class="tag">FastAPI</span><span class="tag">LangChain</span><span class="tag">RAG</span><span class="tag">Vector DB</span></div>
                        </div>
                    </article>
                    <article class="member facet" data-reveal>
                        <div class="member__avatar" aria-hidden="true">С</div>
                        <div>
                            <span class="member__role">Full Stack Developer</span>
                            <h3>Станислав</h3>
                            <p>Программирует ещё с до-AI времён: сначала разбирается в архитектуре, потом ускоряется с помощью AI-инструментов. Построил сайт, CRM и мобильное приложение для ArboStar и CRM с личными кабинетами для восьми ролей для «Мира тайных покупателей».</p>
                            <div class="service__tags"><span class="tag">Laravel</span><span class="tag">CodeIgniter</span><span class="tag">MySQL</span><span class="tag">Docker</span></div>
                        </div>
                    </article>
                    <article class="member facet" data-reveal>
                        <div class="member__avatar" aria-hidden="true">KT</div>
                        <div>
                            <span class="member__role">Senior Backend Developer</span>
                            <h3>Kalpeshkumar Tamboli</h3>
                            <p>14+ лет в backend-разработке на PHP и .NET. Проектирует архитектуру веб-приложений, API-интеграции и работу с базами данных — MySQL, MSSQL, Oracle.</p>
                            <div class="service__tags"><span class="tag">PHP</span><span class="tag">.NET</span><span class="tag">AWS</span><span class="tag">API</span></div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- ============================================================
        PORTFOLIO
        ============================================================ -->
        <section id="portfolio">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="eyebrow">Портфолио</p>
                    <h2>Что мы уже сделали</h2>
                    <p>Production-системы, которые работают у реальных клиентов — не тестовые проекты.</p>
                </div>
                <div class="portfolio__grid">
                    <a class="browser" data-reveal href="https://arbostar.com" target="_blank" rel="noopener" aria-label="Открыть arbostar.com в новой вкладке">
                        <div class="browser__bar">
                            <span class="browser__dots"><span></span><span></span><span></span></span>
                            <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>arbostar.com</span></span>
                        </div>
                        <div class="browser__preview">
                            <h3>ArboStar</h3>
                            <p>Сайт, CRM и мобильное приложение для бизнеса в арбористике: заявки, роли доступа, push-уведомления.</p>
                        </div>
                    </a>
                    <a class="browser" data-reveal href="https://mtp-global.com" target="_blank" rel="noopener" aria-label="Открыть mtp-global.com в новой вкладке">
                        <div class="browser__bar">
                            <span class="browser__dots"><span></span><span></span><span></span></span>
                            <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>mtp-global.com</span></span>
                        </div>
                        <div class="browser__preview">
                            <h3>МТП — Мир тайных покупателей</h3>
                            <p>CRM для сети тайных покупателей: личные кабинеты для восьми ролей, рассылки, статистика.</p>
                        </div>
                    </a>
                    <a class="browser" data-reveal href="https://vivaset.ru" target="_blank" rel="noopener" aria-label="Открыть vivaset.ru в новой вкладке">
                        <div class="browser__bar">
                            <span class="browser__dots"><span></span><span></span><span></span></span>
                            <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>vivaset.ru</span></span>
                        </div>
                        <div class="browser__preview">
                            <h3>Vivaset</h3>
                            <p>Коммерческий проект под ключ: от интерфейса до базы данных — реализован полностью нашей командой.</p>
                        </div>
                    </a>
                    <a class="browser" data-reveal href="https://spb.provy.ru" target="_blank" rel="noopener" aria-label="Открыть spb.provy.ru в новой вкладке">
                        <div class="browser__bar">
                            <span class="browser__dots"><span></span><span></span><span></span></span>
                            <span class="browser__url"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg><span>spb.provy.ru</span></span>
                        </div>
                        <div class="browser__preview">
                            <h3>Provy</h3>
                            <p>Коммерческий проект под ключ, реализован полностью нашей командой.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- ============================================================
        TECH STACK
        ============================================================ -->
        <section class="section-alt" id="stack">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="eyebrow">Стек</p>
                    <h2>Технологии в работе</h2>
                    <p>Выбираем стек под задачу, а не подгоняем задачу под один любимый фреймворк.</p>
                </div>
                <div class="techgrid">
                    <div class="techcol" data-reveal>
                        <h3>Frontend</h3>
                        <ul><li>Next.js</li><li>React</li><li>Angular</li><li>JavaScript / TypeScript</li></ul>
                    </div>
                    <div class="techcol" data-reveal>
                        <h3>Backend</h3>
                        <ul><li>Node.js</li><li>Python / FastAPI</li><li>.NET Core</li><li>PHP / Laravel / CodeIgniter</li></ul>
                    </div>
                    <div class="techcol" data-reveal>
                        <h3>AI &amp; RAG</h3>
                        <ul><li>LangChain</li><li>RAG</li><li>LLM / AI-агенты</li><li>Vector DB / ChromaDB</li></ul>
                    </div>
                    <div class="techcol" data-reveal>
                        <h3>Данные</h3>
                        <ul><li>MySQL</li><li>MongoDB</li><li>MSSQL</li><li>Oracle</li><li>SQL Server</li></ul>
                    </div>
                    <div class="techcol" data-reveal>
                        <h3>Инфраструктура</h3>
                        <ul><li>Docker</li><li>Git</li><li>AWS</li><li>REST API</li></ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================
        WHY US
        ============================================================ -->
        <section id="why">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="eyebrow">Почему мы</p>
                    <h2>Почему EVOLARIS</h2>
                </div>
                <div class="why__grid">
                    <div class="why" data-reveal>
                        <div class="why__mark" aria-hidden="true"></div>
                        <h3>Всё в одной команде</h3>
                        <p>Frontend, backend, данные и AI — без передачи проекта между подрядчиками и потери контекста.</p>
                    </div>
                    <div class="why" data-reveal>
                        <div class="why__mark" aria-hidden="true"></div>
                        <h3>AI ускоряет, инженерия — контролирует</h3>
                        <p>Мы используем AI-инструменты, чтобы работать быстрее, но архитектуру и качество полностью контролируют инженеры.</p>
                    </div>
                    <div class="why" data-reveal>
                        <div class="why__mark" aria-hidden="true"></div>
                        <h3>Реальный коммерческий опыт</h3>
                        <p>Production-CRM, e-commerce под ключ, AI-продукт с опубликованной исследовательской работой — не пет-проекты, а системы, которые работают.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================
        CONTACT
        ============================================================ -->
        <section id="contact">
            <div class="container">
                <div class="contact__panel" data-reveal>
                    <div>
                        <p class="eyebrow">Контакты</p>
                        <h2>Обсудим ваш проект</h2>
                        <p class="contact__sub">Юрий ответит в Telegram или по телефону — расскажите в двух словах, что нужно построить.</p>
                    </div>
                    <div class="contact__manager">
                        <span class="role">Менеджер проекта</span>
                        <span class="name">Юрий</span>
                        <a class="contact__row" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 4.5L2.5 11.8l6 2.1M21 4.5l-3 15-6.7-5M21 4.5l-9.5 8.6M8.5 13.9v5l3-2.7"/></svg>
                            @Manager_pegase
                        </a>
                        <a class="contact__row" href="mailto:nazarenkou944@gmail.com">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 5h18v14H3z"/><path d="M3 6l9 7 9-7"/></svg>
                            nazarenkou944@gmail.com
                        </a>
                        <a class="btn btn-primary" href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Написать в Telegram</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ============================================================
    FOOTER
    ============================================================ -->
    <footer class="footer">
        <div class="container">
            <div class="footer__brand">
                <img src="images/logo.webp" alt="" width="26" height="26">
                <span>EVOLARIS</span>
            </div>
            <p class="footer__meta">© <span id="year">2026</span> EVOLARIS. Full-stack &amp; AI-разработка.</p>
            <div class="footer__links">
                <a href="https://t.me/Manager_pegase" target="_blank" rel="noopener">Telegram</a>
                <a href="tel:+380951118402">+380 95 111 84 02</a>
            </div>
        </div>
    </footer>
</div>
<script src="js/main.js" defer></script>
</body>
</html>