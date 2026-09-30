<?php
// Admin Screen: Settings
$current_page = 'Settings';
$current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'general';

$tabs = [
    'general' => [
        'label' => 'General Settings', 
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>'
    ],
    'email' => [
        'label' => 'Email Settings',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>'
    ],
    'payment' => [
        'label' => 'Payment Settings',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>'
    ],
    'website' => [
        'label' => 'Website Settings',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>'
    ],
    'rbac' => [
        'label' => 'RBAC Management',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'
    ]
];

if (!array_key_exists($current_tab, $tabs)) {
    $current_tab = 'general';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - AstroJyoti Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .table-scroll::-webkit-scrollbar { height: 6px; width: 6px; }
        .table-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .table-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        .social-input-wrapper:focus-within svg { color: #f97316; }
    </style>
</head>
<body class="text-slate-800 antialiased overflow-hidden h-screen flex bg-slate-50">
    
    <!-- GLOBAL SIDEBAR -->
    <?php include __DIR__ . '/Components/AdminSidebar.php'; ?>
    
    <!-- MAIN CONTENT AREA -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <!-- GLOBAL HEADER -->
        <?php include __DIR__ . '/Components/AdminHeader.php'; ?>
        
        <!-- SCROLLABLE CONTENT -->
        <main class="flex-1 overflow-y-auto p-6 lg:p-8 table-scroll">
            
            <div class="max-w-[1400px] mx-auto space-y-6">
                
                <!-- Breadcrumb & Header -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div>
                        <nav class="flex items-center text-sm text-slate-500 mb-2">
                            <a href="/Admin/Settings" class="hover:text-[#dd5c23] transition-colors font-medium">Settings</a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            <span class="text-slate-800 font-medium"><?php echo $tabs[$current_tab]['label']; ?></span>
                        </nav>
                        <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Settings</h1>
                        <p class="text-sm text-slate-500 mt-1 font-medium">Manage general platform settings for the AstroJyoti application.</p>
                    </div>
                </div>
                
                <!-- Settings Tabs -->
                <div class="flex overflow-x-auto table-scroll bg-white rounded-xl border border-slate-200 shadow-sm p-1 gap-1">
                    <?php foreach ($tabs as $key => $tab): ?>
                        <?php if ($key === $current_tab): ?>
                            <a href="/Admin/Settings?tab=<?php echo $key; ?>" class="px-5 py-2.5 bg-orange-50 text-[#dd5c23] font-bold text-sm rounded-lg flex items-center gap-2 border border-orange-100 shrink-0">
                                <?php echo $tab['icon']; ?>
                                <?php echo $tab['label']; ?>
                            </a>
                        <?php else: ?>
                            <a href="/Admin/Settings?tab=<?php echo $key; ?>" class="px-5 py-2.5 text-slate-600 hover:text-slate-800 hover:bg-slate-50 font-medium text-sm rounded-lg flex items-center gap-2 transition-colors shrink-0">
                                <?php echo $tab['icon']; ?>
                                <?php echo $tab['label']; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                
                <?php if ($current_tab === 'general'): ?>
                <!-- GENERAL SETTINGS -->
                <form id="settingsForm" onsubmit="event.preventDefault(); saveSettings();" class="space-y-6 pb-10">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        <!-- Top Row Left: Platform Information -->
                        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                            <div class="mb-5">
                                <h2 class="text-lg font-bold text-slate-800">Platform Information</h2>
                                <p class="text-sm text-slate-500">Basic information about the AstroJyoti platform.</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-5">
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-1.5">Website Name <span class="text-red-500">*</span></label>
                                        <input type="text" id="siteName" value="AstroJyoti" required class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-1.5">Website Tagline</label>
                                        <input type="text" id="siteTagline" value="Guidance for a Brighter Tomorrow" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-1.5">Website URL <span class="text-red-500">*</span></label>
                                        <input type="url" id="siteUrl" value="https://www.astrojyoti.com" required class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1.5">Platform Logo</label>
                                    <div class="p-4 border border-slate-200 rounded-xl bg-slate-50 relative group flex flex-col items-center">
                                        <div class="h-16 flex items-center justify-center my-4">
                                            <img src="/asset/logo.png" alt="AstroJyoti Logo" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 200 50\'><text x=\'10\' y=\'30\' font-family=\'Arial\' font-size=\'20\' fill=\'#f97316\'>AstroJyoti Logo</text></svg>'" class="max-h-full object-contain">
                                        </div>
                                        <div class="w-full mt-2 relative border border-slate-200 bg-white rounded-lg flex items-center justify-between px-3 py-2 hover:bg-slate-50 transition-colors overflow-hidden">
                                            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/png, image/jpeg">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                                <div class="flex flex-col">
                                                    <span class="text-xs font-bold text-slate-700">Upload Logo</span>
                                                    <span class="text-[10px] text-slate-400">PNG, JPG (Max 2MB)</span>
                                                </div>
                                            </div>
                                            <span class="text-xs font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded">Choose File</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-slate-400 mt-2">Recommended size: 300 x 100 px</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Top Row Right: Favicon -->
                        <div class="lg:col-span-1 bg-white rounded-2xl border border-slate-200 shadow-sm p-6 h-full flex flex-col">
                            <div class="mb-5">
                                <h2 class="text-lg font-bold text-slate-800">Favicon</h2>
                                <p class="text-sm text-slate-500">Small icon displayed in browser tab.</p>
                            </div>
                            <div class="flex-1 flex flex-col justify-center items-center">
                                <div class="w-full p-4 border border-slate-200 rounded-xl bg-slate-50 relative group flex flex-col items-center">
                                    <div class="w-16 h-16 bg-white border border-slate-100 shadow-sm rounded-lg flex items-center justify-center my-4 overflow-hidden">
                                        <img src="/favicon.svg" alt="Favicon" class="w-10 h-10 object-contain">
                                    </div>
                                    <div class="w-full mt-2 relative border border-slate-200 bg-white rounded-lg flex items-center justify-between px-3 py-2 hover:bg-slate-50 transition-colors overflow-hidden">
                                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/png, image/x-icon, image/svg+xml">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" /></svg>
                                            <div class="flex flex-col">
                                                <span class="text-xs font-bold text-slate-700">Upload Favicon</span>
                                                <span class="text-[10px] text-slate-400">PNG, ICO (Max 1MB)</span>
                                            </div>
                                        </div>
                                        <span class="text-xs font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded">Choose File</span>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-400 mt-2 self-start">Recommended size: 32 x 32 px</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        <!-- Middle Row Left: Contact Information -->
                        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                            <div class="mb-5">
                                <h2 class="text-lg font-bold text-slate-800">Contact Information</h2>
                                <p class="text-sm text-slate-500">This information will be displayed on the website and used for communication.</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                        </div>
                                        <input type="email" value="support@astrojyoti.com" required class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                </div>
                                <div class="md:row-span-2">
                                    <label class="block text-sm font-bold text-slate-700 mb-1.5">Address</label>
                                    <div class="relative h-full pb-2">
                                        <div class="absolute top-3 left-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        </div>
                                        <textarea rows="3" class="w-full h-full min-h-[100px] pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all resize-none">123, AstroJyoti Tower, Sector 62
Noida, Uttar Pradesh 201301, India</textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1.5">Phone Number <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                                        </div>
                                        <input type="tel" value="+91 98765 43210" required class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1.5">WhatsApp Number</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c.003-3.625 2.952-6.57 6.577-6.57a6.59 6.59 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.608 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
                                        </div>
                                        <input type="tel" value="+91 98765 43210" class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1.5">Support Timing</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        </div>
                                        <input type="text" value="Monday - Sunday, 9:00 AM - 9:00 PM" class="w-full pl-9 pr-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Middle Row Right: Social Media Links -->
                        <div class="lg:col-span-1 bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                            <div class="mb-5">
                                <h2 class="text-lg font-bold text-slate-800">Social Media Links</h2>
                                <p class="text-sm text-slate-500">Add your official social media profiles.</p>
                            </div>
                            <div class="space-y-4">
                                <!-- Social Inputs -->
                                <div class="relative social-input-wrapper">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-blue-600" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
                                    </div>
                                    <input type="url" value="https://facebook.com/astrojyoti" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                </div>
                                <div class="relative social-input-wrapper">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-pink-600" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>
                                    </div>
                                    <input type="url" value="https://instagram.com/astrojyoti" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                </div>
                                <div class="relative social-input-wrapper">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-600" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.052-.072 1.972l-.008.104-.022.261-.01.104c-.048.519-.119 1.023-.22 1.402a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c1.16-.312 5.569-.334 6.18-.335h.142c.309 0 1.587.006 2.927.052l.17.006.087.004.171.007.171.007c1.11.049 2.167.128 2.654.26zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/></svg>
                                    </div>
                                    <input type="url" value="https://youtube.com/astrojyoti" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                </div>
                                <div class="relative social-input-wrapper">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-sky-500" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.873 11.633Z"/></svg>
                                    </div>
                                    <input type="url" value="https://twitter.com/astrojyoti" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                </div>
                                <div class="relative social-input-wrapper">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-blue-700" viewBox="0 0 16 16"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                                    </div>
                                    <input type="url" value="https://linkedin.com/company/astrojyoti" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bottom Row: Additional Settings -->
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                        <div class="mb-5">
                            <h2 class="text-lg font-bold text-slate-800">Additional Settings</h2>
                            <p class="text-sm text-slate-500">Configure other platform settings.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Default Language</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="English" selected>English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Default Currency</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="INR" selected>INR (₹)</option>
                                        <option value="USD">USD ($)</option>
                                        <option value="EUR">EUR (€)</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Timezone</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="Asia/Kolkata" selected>Asia/Kolkata (GMT +5:30)</option>
                                        <option value="UTC">UTC</option>
                                        <option value="America/New_York">America/New_York (GMT -4:00)</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="px-6 py-2.5 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" /></svg>
                            Save Settings
                        </button>
                    </div>
                </form>
                
                <?php elseif ($current_tab === 'email'): ?>
                <!-- EMAIL SETTINGS -->
                <form id="settingsForm" onsubmit="event.preventDefault(); saveSettings();" class="space-y-6 pb-10">
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 max-w-3xl">
                        <div class="mb-5">
                            <h2 class="text-lg font-bold text-slate-800">Email Configuration</h2>
                            <p class="text-sm text-slate-500">Configure SMTP settings for outgoing platform emails.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">SMTP Host</label>
                                <input type="text" value="smtp.mailtrap.io" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">SMTP Port</label>
                                <input type="number" value="2525" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">SMTP Username</label>
                                <input type="text" value="mock_user_123" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">SMTP Password</label>
                                <input type="password" value="mock_pass_123" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">From Name</label>
                                <input type="text" value="AstroJyoti Support" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">From Email</label>
                                <input type="email" value="support@astrojyoti.com" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div class="md:col-span-2 pt-2">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" class="sr-only" checked>
                                        <div class="block bg-orange-100 w-10 h-6 rounded-full border border-orange-200"></div>
                                        <div class="dot absolute left-1 top-1 bg-[#f97316] w-4 h-4 rounded-full transition transform translate-x-4"></div>
                                    </div>
                                    <span class="text-sm font-bold text-slate-700">Enable Email Notifications</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="px-6 py-2.5 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" /></svg>
                            Save Settings
                        </button>
                    </div>
                </form>
                
                <?php elseif ($current_tab === 'payment'): ?>
                <!-- PAYMENT SETTINGS -->
                <form id="settingsForm" onsubmit="event.preventDefault(); saveSettings();" class="space-y-6 pb-10">
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 max-w-3xl">
                        <div class="mb-5">
                            <h2 class="text-lg font-bold text-slate-800">Payment Gateway</h2>
                            <p class="text-sm text-slate-500">Configure your integrated payment processors.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Payment Gateway</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="razorpay" selected>Razorpay</option>
                                        <option value="stripe">Stripe</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Razorpay Key ID</label>
                                <input type="text" value="rzp_test_mockKeyId12345" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Razorpay Secret</label>
                                <input type="password" value="mock_secret_123" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Currency</label>
                                <input type="text" value="INR" disabled class="w-full px-3 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-500 cursor-not-allowed">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Mode</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="test" selected>Test Mode</option>
                                        <option value="live">Live Mode</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-2 pt-2">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" class="sr-only" checked>
                                        <div class="block bg-orange-100 w-10 h-6 rounded-full border border-orange-200"></div>
                                        <div class="dot absolute left-1 top-1 bg-[#f97316] w-4 h-4 rounded-full transition transform translate-x-4"></div>
                                    </div>
                                    <span class="text-sm font-bold text-slate-700">Enable Payments on Website</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="px-6 py-2.5 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" /></svg>
                            Save Settings
                        </button>
                    </div>
                </form>
                
                <?php elseif ($current_tab === 'website'): ?>
                <!-- WEBSITE SETTINGS -->
                <form id="settingsForm" onsubmit="event.preventDefault(); saveSettings();" class="space-y-6 pb-10">
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 max-w-3xl">
                        <div class="mb-5">
                            <h2 class="text-lg font-bold text-slate-800">Website Configuration</h2>
                            <p class="text-sm text-slate-500">Manage site availability and language defaults.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Website Name</label>
                                <input type="text" value="AstroJyoti" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Website URL</label>
                                <input type="url" value="https://www.astrojyoti.com" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Website Tagline</label>
                                <input type="text" value="Guidance for a Brighter Tomorrow" class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Default Language</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="English" selected>English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1.5">Timezone</label>
                                <div class="relative">
                                    <select class="w-full px-3 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-[#f97316]/20 focus:border-[#f97316] transition-all appearance-none">
                                        <option value="Asia/Kolkata" selected>Asia/Kolkata</option>
                                        <option value="UTC">UTC</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-2 pt-2">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <div class="relative">
                                        <input type="checkbox" class="sr-only">
                                        <div class="block bg-slate-200 w-10 h-6 rounded-full border border-slate-300"></div>
                                        <div class="dot absolute left-1 top-1 bg-white border border-slate-300 w-4 h-4 rounded-full transition"></div>
                                    </div>
                                    <span class="text-sm font-bold text-slate-700">Enable Maintenance Mode</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="px-6 py-2.5 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" /></svg>
                            Save Settings
                        </button>
                    </div>
                </form>
                
                <?php elseif ($current_tab === 'rbac'): ?>
                <!-- RBAC MANAGEMENT -->
                <div class="space-y-6 pb-10">
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-bold text-slate-800">Roles & Permissions</h2>
                            <p class="text-sm text-slate-500">Manage user roles and their access levels across the platform.</p>
                        </div>
                        <button class="px-5 py-2.5 bg-[#f97316] hover:bg-[#ea580c] text-white font-bold text-sm rounded-xl shadow-sm transition-all flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                            Create Role
                        </button>
                    </div>
                    
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider border-b border-slate-200">
                                    <th class="py-4 px-6 font-bold">Role Name</th>
                                    <th class="py-4 px-6 font-bold">Users</th>
                                    <th class="py-4 px-6 font-bold">Status</th>
                                    <th class="py-4 px-6 font-bold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="font-bold text-slate-800">Super Admin</div>
                                        <div class="text-slate-500 text-xs mt-0.5">Full access to all platform features.</div>
                                    </td>
                                    <td class="py-4 px-6 font-medium text-slate-600">2 Users</td>
                                    <td class="py-4 px-6">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-600 border border-emerald-100">Active</span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <button class="text-slate-400 hover:text-[#f97316] transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="font-bold text-slate-800">Moderator</div>
                                        <div class="text-slate-500 text-xs mt-0.5">Can manage users, consultations, and categories.</div>
                                    </td>
                                    <td class="py-4 px-6 font-medium text-slate-600">5 Users</td>
                                    <td class="py-4 px-6">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-600 border border-emerald-100">Active</span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <button class="text-slate-400 hover:text-[#f97316] transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="font-bold text-slate-800">Support Staff</div>
                                        <div class="text-slate-500 text-xs mt-0.5">Read-only access to users and ongoing calls.</div>
                                    </td>
                                    <td class="py-4 px-6 font-medium text-slate-600">12 Users</td>
                                    <td class="py-4 px-6">
                                        <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-600 border border-emerald-100">Active</span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <button class="text-slate-400 hover:text-[#f97316] transition-colors"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php endif; ?>
                
            </div>
            
            <!-- Toast Notification -->
            <div id="toast" class="fixed bottom-6 right-6 transform translate-y-20 opacity-0 transition-all duration-300 z-50 pointer-events-none">
                <div class="bg-slate-800 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span class="font-medium text-sm">Settings saved successfully!</span>
                </div>
            </div>

        </main>
    </div>
    
    <script>
        // Form Validation & Mock Save
        function saveSettings() {
            let isValid = true;
            
            // Just basic required validation for the current tab
            const inputs = document.querySelectorAll('#settingsForm input[required], #settingsForm select[required]');
            inputs.forEach(el => {
                if(!el.value.trim()) {
                    isValid = false;
                    el.classList.remove('border-slate-200');
                    el.classList.add('border-red-400', 'ring-1', 'ring-red-400');
                    
                    el.addEventListener('input', function removeError() {
                        el.classList.remove('border-red-400', 'ring-1', 'ring-red-400');
                        el.classList.add('border-slate-200');
                        el.removeEventListener('input', removeError);
                    });
                }
            });
            
            if(isValid) {
                const toast = document.getElementById('toast');
                toast.classList.remove('translate-y-20', 'opacity-0');
                setTimeout(() => {
                    toast.classList.add('translate-y-20', 'opacity-0');
                }, 3000);
            }
        }
        
        // Handle CSS custom styling for checkboxes/toggles
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', (e) => {
                const dot = e.target.parentElement.querySelector('.dot');
                const bg = e.target.parentElement.querySelector('.block');
                
                if (e.target.checked) {
                    dot.classList.add('translate-x-4');
                    dot.classList.add('bg-[#f97316]');
                    dot.classList.remove('bg-white');
                    dot.classList.remove('border');
                    bg.classList.add('bg-orange-100');
                    bg.classList.add('border-orange-200');
                    bg.classList.remove('bg-slate-200');
                } else {
                    dot.classList.remove('translate-x-4');
                    dot.classList.remove('bg-[#f97316]');
                    dot.classList.add('bg-white');
                    dot.classList.add('border');
                    bg.classList.remove('bg-orange-100');
                    bg.classList.remove('border-orange-200');
                    bg.classList.add('bg-slate-200');
                }
            });
        });
    </script>
</body>
</html>
