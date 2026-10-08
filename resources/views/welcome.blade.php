<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ app('config')->get('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,400..700;1,6..72,400..700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            "darkMode": "class",
            "theme": {
                "extend": {
                    "colors": {
                        "on-primary-container": "#e0e2ff",
                        "on-secondary": "#ffffff",
                        "surface": "#e8eaf0",
                        "on-surface-variant": "#585a68",
                        "surface-variant": "#dcdee4",
                        "tertiary-fixed": "#ede9fe",
                        "primary-fixed": "#e0e2ff",
                        "primary-container": "#818cf8",
                        "surface-container-high": "#dcdee4",
                        "on-secondary-fixed-variant": "#404252",
                        "surface-container": "#e2e4ea",
                        "surface-tint": "#6366f1",
                        "surface-dim": "#d4d6dc",
                        "on-tertiary-container": "#3b1f63",
                        "tertiary-fixed-dim": "#c4b5fd",
                        "on-surface": "#2e3040",
                        "error-container": "#fee2e2",
                        "on-primary-fixed": "#1e1b4b",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#7c3aed",
                        "on-error": "#ffffff",
                        "surface-bright": "#edeef4",
                        "inverse-on-surface": "#e8eaf0",
                        "on-secondary-container": "#585a68",
                        "on-tertiary-fixed": "#2e1065",
                        "on-background": "#2e3040",
                        "background": "#e8eaf0",
                        "secondary": "#6c6e7e",
                        "outline-variant": "#d0d2dc",
                        "outline": "#8a8c9a",
                        "on-tertiary-fixed-variant": "#5b21b6",
                        "surface-container-low": "#e5e7ed",
                        "primary": "#6366f1",
                        "inverse-primary": "#a5b4fc",
                        "secondary-fixed-dim": "#b8baca",
                        "on-error-container": "#991b1b",
                        "inverse-surface": "#2e3040",
                        "on-primary-fixed-variant": "#4338ca",
                        "error": "#dc2626",
                        "on-primary": "#ffffff",
                        "primary-fixed-dim": "#a5b4fc",
                        "secondary-container": "#d8dae6",
                        "tertiary-container": "#a78bfa",
                        "secondary-fixed": "#d8dae6",
                        "surface-container-lowest": "#f0f2f8",
                        "surface-container-highest": "#d6d8de",
                        "on-secondary-fixed": "#1a1b26"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                    "spacing": {},
                    "fontFamily": {
                        "headline": ["Newsreader", "Georgia", "serif"],
                        "display": ["Newsreader", "Georgia", "serif"],
                        "body": ["Plus Jakarta Sans", "sans-serif"],
                        "label": ["Plus Jakarta Sans", "sans-serif"],
                        "serif": ["Newsreader", "Georgia", "serif"]
                    },
                    "fontSize": {}
                }
            }
        }
    </script>
</head>

<body class="bg-surface font-body text-on-surface antialiased">
    <header
        class="fixed top-0 left-0 right-0 z-50 bg-surface/85 backdrop-blur-xl shadow-[6px_6px_16px_rgba(0,0,0,0.04),-6px_-6px_16px_rgba(255,255,255,0.7)]">
        <div class="h-20 max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between gap-6">
            <div class="flex items-center gap-3 shrink-0"><img alt="FinSilk Logo" class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida/AEtjO1W0QuIHbuypuPRcIMO14MMySxNi-gqx2t9LYY71kCBapzlVaM0MR2dbuyTRzIf4VCtz3AWA8dSATa_v1AoLN0GexG9dBnwzVKO6jXDCs4wZ0sM8Ustm_uagwXNc65lBlK45QlZVENinfnh7UFd1USmIF5AT3hQuJzrPAzt5Lnjw07Lg7nqepFYSn_wIf0LSMEr015VMDKILnhj85Rk47ZKzQgAh4RaMCJhVSsFMx2wRZhHq4bCa_Q5Td9gl" /><span
                    class="text-xl font-body font-semibold tracking-tight text-on-surface">FinSilk</span></div>

            <div class="flex items-center gap-4 shrink-0"><a
                    class="px-5 py-2.5 rounded-xl text-sm font-medium text-on-surface bg-surface shadow-[4px_4px_10px_rgba(0,0,0,0.06),-4px_-4px_10px_rgba(255,255,255,0.7)] active:shadow-[inset_3px_3px_6px_rgba(0,0,0,0.06),inset_-3px_-3px_6px_rgba(255,255,255,0.5)] transition-all"
                    data-path="login" href="/login">Log In</a><a
                    class="px-5 py-2.5 rounded-xl text-sm font-medium text-on-primary bg-primary shadow-[4px_4px_12px_rgba(99,102,241,0.35),-2px_-2px_8px_rgba(255,255,255,0.5)] active:opacity-95 transition-all"
                    data-path="signup" href="/register">Register</a>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]">
        <div class="flex flex-col w-full">
            <section class="relative w-full overflow-hidden px-6 lg:px-12 py-16 lg:py-24">
                <!-- Subtle Ambient Glows -->
                <div
                    class="absolute -top-32 left-1/4 w-96 h-96 rounded-full bg-primary/10 blur-3xl pointer-events-none -z-10">
                </div>
                <div
                    class="absolute bottom-10 right-10 w-96 h-96 rounded-full bg-tertiary/10 blur-3xl pointer-events-none -z-10">
                </div>
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">
                        <!-- Left Column: Typography & CTAs -->
                        <div class="lg:col-span-6 flex flex-col items-start space-y-8">
                            <!-- Headline -->
                            <h1
                                class="text-4xl sm:text-5xl lg:text-6xl font-headline font-normal tracking-tight leading-[1.12] text-on-surface">
                                Clarity for your <span class="italic font-normal text-primary">personal wealth</span>
                                and daily records.
                            </h1>
                            <!-- Subtitle -->
                            <p
                                class="text-base sm:text-lg text-on-surface-variant font-normal leading-relaxed max-w-xl">
                                Effortlessly track personal expenses, recurring commitments, assets, and net worth in
                                one tactile, secure ledger designed for peace of mind.
                            </p>
                            <!-- Primary & Secondary CTAs -->
                            <div
                                class="w-full sm:w-auto flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-2">
                                <a class="px-7 py-4 rounded-xl text-base font-semibold text-on-surface bg-surface shadow-[6px_6px_14px_rgba(0,0,0,0.07),-6px_-6px_14px_rgba(255,255,255,0.8)] active:shadow-[inset_4px_4px_8px_rgba(0,0,0,0.06),inset_-4px_-4px_8px_rgba(255,255,255,0.5)] active:scale-[0.99] transition-all flex items-center justify-center gap-2"
                                    href="/login">
                                    <span
                                        class="material-symbols-outlined text-lg text-on-surface-variant">lock_open</span>
                                    <span>Log In to Account</span>
                                </a>
                            </div>
                        </div>
                        <!-- Right Column: Interactive Tactile Ledger Mockup -->
                        <div class="lg:col-span-6 relative">
                            <!-- Outer extruded container -->
                            <div
                                class="relative w-full rounded-2xl bg-surface p-6 sm:p-8 shadow-[12px_12px_28px_rgba(0,0,0,0.09),-12px_-12px_28px_rgba(255,255,255,0.9)]">
                                <!-- Window Bar / Header -->
                                <div class="flex items-center justify-between pb-6">
                                    <div class="flex items-center gap-2.5">
                                        <div
                                            class="w-3 h-3 rounded-full bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.2)]">
                                        </div>
                                        <div
                                            class="w-3 h-3 rounded-full bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.2)]">
                                        </div>
                                        <div
                                            class="w-3 h-3 rounded-full bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.2)]">
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center gap-1.5 px-3 py-1 rounded-lg bg-surface shadow-[inset_2px_2px_5px_rgba(0,0,0,0.06),inset_-2px_-2px_5px_rgba(255,255,255,0.6)] text-[11px] text-on-surface-variant">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                        <span>Active Vault</span>
                                    </div>
                                </div>
                                <!-- Top Row: Balance Cards -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pb-6">
                                    <!-- Card 1: Net Worth -->
                                    <div
                                        class="p-5 rounded-xl bg-surface shadow-[6px_6px_12px_rgba(0,0,0,0.07),-6px_-6px_12px_rgba(255,255,255,0.7)] flex flex-col justify-between">
                                        <div class="flex items-center justify-between text-on-surface-variant">
                                            <span class="text-xs uppercase tracking-wider font-semibold">Total Net
                                                Worth</span>
                                            <span
                                                class="material-symbols-outlined text-base text-primary">account_balance_wallet</span>
                                        </div>
                                        <div class="mt-3">
                                            <div class="text-2xl font-bold font-body text-on-surface tracking-tight">
                                                $148,290.40</div>
                                            <div
                                                class="inline-flex items-center gap-1 mt-1 text-xs text-primary font-medium">
                                                <span class="material-symbols-outlined text-sm">trending_up</span>
                                                <span>+4.2% this quarter</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 2: Monthly Balance & Ratio -->
                                    <div
                                        class="p-5 rounded-xl bg-surface shadow-[6px_6px_12px_rgba(0,0,0,0.07),-6px_-6px_12px_rgba(255,255,255,0.7)] flex flex-col justify-between">
                                        <div class="flex items-center justify-between text-on-surface-variant">
                                            <span class="text-xs uppercase tracking-wider font-semibold">October Free
                                                Cash</span>
                                            <span
                                                class="material-symbols-outlined text-base text-tertiary">savings</span>
                                        </div>
                                        <div class="mt-3">
                                            <div class="text-2xl font-bold font-body text-on-surface tracking-tight">
                                                +$4,820.00</div>
                                            <div
                                                class="inline-flex items-center gap-1 mt-1 text-xs text-on-surface-variant font-medium">
                                                <span>Target: </span>
                                                <span class="text-on-surface font-semibold">$5,000.00 (96%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Spending vs Income Visual Balance Bar -->
                                <div
                                    class="p-4 rounded-xl bg-surface shadow-[inset_3px_3px_7px_rgba(0,0,0,0.06),inset_-3px_-3px_7px_rgba(255,255,255,0.7)] mb-6">
                                    <div class="flex justify-between items-center text-xs mb-2">
                                        <div class="flex items-center gap-2">
                                            <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                                            <span class="font-medium text-on-surface">Income Inflow ($8,450)</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                                            <span class="text-on-surface-variant">Outflow ($3,630)</span>
                                        </div>
                                    </div>
                                    <div
                                        class="w-full h-3 rounded-full bg-surface shadow-[inset_2px_2px_4px_rgba(0,0,0,0.1)] overflow-hidden flex">
                                        <div class="h-full bg-primary rounded-l-full" style="width: 70%"></div>
                                        <div class="h-full bg-secondary/40 rounded-r-full" style="width: 30%"></div>
                                    </div>
                                </div>
                                <!-- Recent Records Section -->
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between px-1">
                                        <span
                                            class="text-xs uppercase tracking-wider font-semibold text-on-surface-variant">Recent
                                            Ledger Entries</span>
                                        <span
                                            class="text-xs text-primary font-medium hover:underline cursor-pointer">View
                                            All (42)</span>
                                    </div>
                                    <!-- Entry 1 -->
                                    <div
                                        class="p-3.5 rounded-xl bg-surface shadow-[4px_4px_10px_rgba(0,0,0,0.05),-4px_-4px_10px_rgba(255,255,255,0.7)] flex items-center justify-between hover:translate-y-[-1px] transition-transform">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-9 h-9 rounded-lg bg-surface shadow-[inset_2px_2px_5px_rgba(0,0,0,0.06),inset_-2px_-2px_5px_rgba(255,255,255,0.6)] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined text-lg">payments</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-on-surface">Salary Deposit</div>
                                                <div class="text-[11px] text-on-surface-variant">Primary Employer •
                                                    Today</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-semibold text-primary">+$6,400.00</div>
                                            <span
                                                class="inline-block px-2 py-0.5 rounded-md text-[10px] font-medium bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.05),inset_-1.5px_-1.5px_3px_rgba(255,255,255,0.6)] text-on-surface-variant">Verified</span>
                                        </div>
                                    </div>
                                    <!-- Entry 2 -->
                                    <div
                                        class="p-3.5 rounded-xl bg-surface shadow-[4px_4px_10px_rgba(0,0,0,0.05),-4px_-4px_10px_rgba(255,255,255,0.7)] flex items-center justify-between hover:translate-y-[-1px] transition-transform">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-9 h-9 rounded-lg bg-surface shadow-[inset_2px_2px_5px_rgba(0,0,0,0.06),inset_-2px_-2px_5px_rgba(255,255,255,0.6)] flex items-center justify-center text-tertiary">
                                                <span class="material-symbols-outlined text-lg">home</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-on-surface">Studio Rent</div>
                                                <div class="text-[11px] text-on-surface-variant">Monthly Fixed •
                                                    Yesterday</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-semibold text-on-surface">-$1,850.00</div>
                                            <span
                                                class="inline-block px-2 py-0.5 rounded-md text-[10px] font-medium bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.05),inset_-1.5px_-1.5px_3px_rgba(255,255,255,0.6)] text-on-surface-variant">Recurring</span>
                                        </div>
                                    </div>
                                    <!-- Entry 3 -->
                                    <div
                                        class="p-3.5 rounded-xl bg-surface shadow-[4px_4px_10px_rgba(0,0,0,0.05),-4px_-4px_10px_rgba(255,255,255,0.7)] flex items-center justify-between hover:translate-y-[-1px] transition-transform">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-9 h-9 rounded-lg bg-surface shadow-[inset_2px_2px_5px_rgba(0,0,0,0.06),inset_-2px_-2px_5px_rgba(255,255,255,0.6)] flex items-center justify-center text-primary">
                                                <span class="material-symbols-outlined text-lg">monitoring</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-on-surface">Investment Dividend
                                                </div>
                                                <div class="text-[11px] text-on-surface-variant">Index Ledger • Oct 24
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-semibold text-primary">+$342.50</div>
                                            <span
                                                class="inline-block px-2 py-0.5 rounded-md text-[10px] font-medium bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.05),inset_-1.5px_-1.5px_3px_rgba(255,255,255,0.6)] text-on-surface-variant">Passive</span>
                                        </div>
                                    </div>
                                    <!-- Entry 4 -->
                                    <div
                                        class="p-3.5 rounded-xl bg-surface shadow-[4px_4px_10px_rgba(0,0,0,0.05),-4px_-4px_10px_rgba(255,255,255,0.7)] flex items-center justify-between hover:translate-y-[-1px] transition-transform">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-9 h-9 rounded-lg bg-surface shadow-[inset_2px_2px_5px_rgba(0,0,0,0.06),inset_-2px_-2px_5px_rgba(255,255,255,0.6)] flex items-center justify-center text-secondary">
                                                <span
                                                    class="material-symbols-outlined text-lg">health_and_safety</span>
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-on-surface">Health Insurance
                                                </div>
                                                <div class="text-[11px] text-on-surface-variant">Quarterly Plan • Oct
                                                    21</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-semibold text-on-surface">-$240.00</div>
                                            <span
                                                class="inline-block px-2 py-0.5 rounded-md text-[10px] font-medium bg-surface shadow-[inset_1.5px_1.5px_3px_rgba(0,0,0,0.05),inset_-1.5px_-1.5px_3px_rgba(255,255,255,0.6)] text-on-surface-variant">Automated</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Ledger Action Footer -->
                                <div class="pt-5 flex items-center justify-between border-none">
                                    <button
                                        class="px-4 py-2 rounded-xl bg-surface shadow-[3px_3px_6px_rgba(0,0,0,0.06),-3px_-3px_6px_rgba(255,255,255,0.8)] active:shadow-[inset_2px_2px_4px_rgba(0,0,0,0.08)] text-xs font-semibold text-on-surface flex items-center gap-1.5 transition-all">
                                        <span class="material-symbols-outlined text-base">add</span>
                                        <span>Quick Record</span>
                                    </button>
                                    <div class="text-[11px] text-on-surface-variant flex items-center gap-1">
                                        <span class="material-symbols-outlined text-xs text-primary">sync</span>
                                        <span>Encrypted snapshot synced</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Subtle Decorative Accent Disc -->
                            <div
                                class="absolute -bottom-6 -right-6 w-24 h-24 rounded-full bg-surface shadow-[8px_8px_16px_rgba(0,0,0,0.08),-8px_-8px_16px_rgba(255,255,255,0.8)] flex items-center justify-center -z-10 hidden sm:flex">
                                <span class="material-symbols-outlined text-primary text-3xl">token</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="w-full bg-surface py-16 shadow-[0_-6px_16px_rgba(0,0,0,0.03)]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 pb-12">
                <div class="md:col-span-5 space-y-4">
                    <div class="flex items-center gap-3"><img alt="FinSilk Logo" class="h-7 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida/AEtjO1W0QuIHbuypuPRcIMO14MMySxNi-gqx2t9LYY71kCBapzlVaM0MR2dbuyTRzIf4VCtz3AWA8dSATa_v1AoLN0GexG9dBnwzVKO6jXDCs4wZ0sM8Ustm_uagwXNc65lBlK45QlZVENinfnh7UFd1USmIF5AT3hQuJzrPAzt5Lnjw07Lg7nqepFYSn_wIf0LSMEr015VMDKILnhj85Rk47ZKzQgAh4RaMCJhVSsFMx2wRZhHq4bCa_Q5Td9gl" /><span
                            class="text-lg font-body font-semibold text-on-surface">FinSilk</span></div>
                    <p class="text-sm text-on-surface-variant max-w-sm leading-relaxed">Sculpted personal wealth &amp;
                        records intelligence. Elegant, tactile tracking engineered for total financial clarity.</p>
                </div>
            </div>
            <div
                class="pt-8 mt-4 border-t border-surface-container flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-on-surface-variant">
                <div>© {{ now()->year }} FinSilk Technologies Inc. All rights reserved.</div>
            </div>
        </div>
    </footer>
</body>

</html>
