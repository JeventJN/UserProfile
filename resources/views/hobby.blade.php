<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    
    <div class="relative bg-gray-50 dark:bg-slate-900 w-screen h-screen pattern">
        <nav
        class="z-20 flex shrink-0 grow-0 justify-around gap-4 border-t border-gray-200 bg-white/50 p-2.5 shadow-lg backdrop-blur-lg dark:border-slate-600/60 dark:bg-slate-800/50 fixed top-2/4 -translate-y-2/4 left-6 min-h-[auto] min-w-[64px] flex-col rounded-lg border"
        >
        <a
            href="profile"
            class="flex aspect-square min-h-[32px] w-16 flex-col items-center justify-center gap-1 rounded-md p-1.5 text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-slate-800"
        >
            <!-- HeroIcon - User -->
            <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 shrink-0"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
            />
            </svg>

            <small class="text-center text-xs font-medium"> Profile </small>
        </a>

        <a
            href="education"
            class="flex aspect-square min-h-[32px] w-16 flex-col items-center justify-center gap-1 rounded-md p-1.5 text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-slate-800"
        >
            <!-- HeroIcon - Chart Bar -->
            <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="-3 -5 24 24"
            stroke-width="1"
            stroke="currentColor"
            class="w-9 h-9 shrink-0"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"
            />
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
            </svg>

            <small class="text-center text-xs font-medium"> Education </small>
        </a>

        <a
            href="hobby"
            class="flex aspect-square min-h-[32px] w-16 flex-col items-center justify-center gap-1 rounded-md p-1.5 bg-indigo-50 text-indigo-600 dark:bg-sky-900 dark:text-sky-50"
        >
        <!-- HeroIcon - Cog-6-tooth -->
            <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="-5 -5 24 24"
            stroke-width="1"
            stroke="currentColor"
            class="w-10 h-10 shrink-0"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6.731 0 2 9.125h2.788L6.73 5.497l1.93 3.628h2.766L6.731 0zm4.694 9.125-1.372 2.756L8.66 9.125H6.547L10.053 16l3.484-6.875h-2.112z">
            />
            </svg>

            <small class="text-center text-xs font-medium"> Hobby </small>
        </a>
    </div>
</body>
</html>