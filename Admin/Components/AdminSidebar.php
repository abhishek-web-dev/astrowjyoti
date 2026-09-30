<?php
// Reusable Admin Sidebar Component
$current_page = basename($_SERVER['PHP_SELF'], ".php");

// Map sub-pages to parent navigation items
$active_nav = $current_page;
if ($current_page === 'Add-Category') {
    $active_nav = 'Categories';
} else if ($current_page === 'Add-User') {
    $active_nav = 'Users';
}
// If there are other subpages, map them here.
?>
<!-- Sidebar -->
<aside class="w-64 flex-shrink-0 flex flex-col h-screen border-r border-slate-200 z-20 overflow-hidden" style="background-color: #fdfaf6;">
    
    <!-- Logo -->
    <div class="px-6 py-6 flex flex-col items-start border-b border-transparent shrink-0">
        <a href="/Admin/Dashboard">
            <img src="/asset/logo.png" alt="AstroJyoti" class="h-10 mb-4 object-contain">
        </a>
        <span class="text-slate-800 font-bold text-sm tracking-wide uppercase">Admin Panel</span>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto relative z-10">
        
        <?php
        $nav_items = [
            ['id' => 'Dashboard', 'label' => 'Dashboard', 'url' => '/Admin/Dashboard', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />'],
            ['id' => 'Users', 'label' => 'Users', 'url' => '/Admin/Users', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />'],
            ['id' => 'Deleted-Users', 'label' => 'Deleted Users', 'url' => '/Admin/Deleted-Users', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />'],
            ['id' => 'Astrologer-Onboarding', 'label' => 'Astrologer Onboarding', 'url' => '/Admin/Astrologer-Onboarding', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />'],
            ['id' => 'Astrologers-Call', 'label' => 'Astrologers Call', 'url' => '/Admin/Astrologers-Call', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />'],
            ['id' => 'Ongoing-Calls', 'label' => 'Ongoing Calls', 'url' => '/Admin/Ongoing-Calls', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.516l2.257-1.13a1 1 0 00.502-1.21L9.22 3.683A1 1 0 008.27 3H5z" />'],
            ['id' => 'All-Consultations', 'label' => 'All Consultations', 'url' => '/Admin/All-Consultations', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />'],
            ['id' => 'All-Payments', 'label' => 'All Payments', 'url' => '/Admin/All-Payments', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />'],
            ['id' => 'Categories', 'label' => 'Categories', 'url' => '/Admin/Categories', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />'],
            ['id' => 'System-Logs', 'label' => 'System Logs', 'url' => '/Admin/System-Logs', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />'],
            ['id' => 'Settings', 'label' => 'Settings', 'url' => '/Admin/Settings', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />']
        ];

        foreach ($nav_items as $item) {
            $isActive = ($active_nav === $item['id']);
            $bgClass = $isActive ? 'shadow-md !text-white' : 'text-slate-600 hover:bg-white hover:text-slate-800';
            $activeStyle = $isActive ? 'background-color: #dd5c23; color: #ffffff !important;' : '';
            $iconStyle = $isActive ? 'color: #ffffff !important;' : 'color: #94a3b8;';
            
            echo '<a href="' . $item['url'] . '" class="flex items-center gap-3 px-4 py-2.5 rounded-xl transition-all duration-200 font-medium text-sm ' . $bgClass . '" style="' . $activeStyle . '">';
            echo '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 transition-colors" style="' . $iconStyle . '" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">' . $item['icon'] . '</svg>';
            echo '<span class="whitespace-nowrap">' . $item['label'] . '</span>';
            echo '</a>';
            
            // Submenu logic removed per user request
        }
        ?>

    </nav>
    
    <!-- Decorative bottom image -->
    <div class="absolute bottom-0 left-0 right-0 h-48 bg-[url('/Admin/Astrologer-Login-banner.png')] bg-cover bg-top opacity-30 pointer-events-none z-0" style="mask-image: linear-gradient(to top, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%); -webkit-mask-image: linear-gradient(to top, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);">
    </div>

</aside>
