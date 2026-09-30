<?php
require_once __DIR__ . '/../auth_guard.php';

// Chat.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat with Astrologer - Astrowjyoti</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .chat-bg {
      background-color: #fdfaf5;
      background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjZjNlYmRjIiBmaWxsLW9wYWNpdHk9IjAuNSI+PHBhdGggZD0iTTEwMCA1MGMyNy42MTQgMCA1MCAyMi4zODYgNTAgNTBzLTIyLjM4NiA1MC01MCA1MC01MC0yMi4zODYtNTAtNTAgMjIuMzg2LTUwIDUwLTUwem0wIDEwYy0yMi4wOTEgMC00MCAxNy45MDktNDAgNDBzMTcuOTA5IDQwIDQwIDQwIDQwLTE3LjkwOSA0MC00MC0xNy45MDktNDAtNDAtNDB6Ii8+PC9nPjwvc3ZnPg==');
      background-size: 300px;
      background-blend-mode: multiply;
    }
  </style>
</head>
<body class="bg-[#f9fafb] font-sans text-gray-800 antialiased h-screen flex overflow-hidden">

  <!-- Mobile Overlay -->
  <div id="mobile-overlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden transition-opacity"></div>

  <?php include __DIR__ . '/../Dashboard/sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#fafafa]">
    
    <?php include __DIR__ . '/../Dashboard/header.php'; ?>

    <!-- Full Height Content -->
    <div class="flex-1 p-4 sm:p-6 lg:p-8 flex flex-col h-full overflow-hidden">
      
      <!-- Loading State -->
      <div id="page-loading" class="absolute inset-0 flex flex-col items-center justify-center bg-[#faf8f5] z-50">
          <svg class="w-10 h-10 text-astro-orange animate-spin mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
          <p class="text-gray-500 font-medium">Initializing Workspace...</p>
      </div>

      <!-- No Session State (Landing State - Astrologer List) -->
      <div id="no-session-workspace" class="hidden flex-1 flex flex-col min-h-0 h-full overflow-y-auto hide-scrollbar">
          <div class="mb-6 shrink-0">
              <h2 class="text-2xl font-bold text-gray-900">Chat with Astrologer</h2>
              <p class="text-sm text-gray-500 mt-1">Get personalized guidance through a private chat with an expert astrologer.</p>
          </div>
          
          <!-- MAIN CONTENT AREA -->
          <div class="flex flex-col xl:flex-row gap-8 pb-8">
            
            <!-- LEFT: FILTER SIDEBAR -->
            <div class="w-full xl:w-64 shrink-0 xl:sticky xl:top-0 xl:self-start xl:max-h-[calc(100vh-8rem)] xl:overflow-y-auto hide-scrollbar xl:-mt-2 xl:pt-2 bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
              <div class="flex justify-between items-center mb-4">
                <h2 class="text-base font-bold text-[#1e293b]">Filters</h2>
                <button id="clear_all_filters" class="text-xs font-semibold text-astro-orange hover:text-orange-600">Clear All</button>
              </div>

              <div class="mb-6 relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" placeholder="Search by name..." class="w-full pl-9 pr-4 py-2 bg-[#f9fafb] border border-gray-200 rounded-xl text-sm focus:ring-1 focus:ring-astro-orange focus:border-astro-orange outline-none shadow-sm transition-colors">
              </div>

              <div class="space-y-6">
                <!-- Specialization Filter -->
                <div class="filter-group" id="specialization_group">
                  <h3 class="text-sm font-bold text-gray-800 mb-3">Specialization</h3>
                  <div class="space-y-2 max-h-48 overflow-y-auto hide-scrollbar pr-2">
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="" class="hidden filter-input" checked>
                      <div class="w-4 h-4 rounded border flex items-center justify-center border-gray-300 text-transparent transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 font-semibold group-hover:text-gray-800 transition-colors label-text">All Specializations</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Love & Relationship" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Love & Relationship</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Career & Finance" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Career & Finance</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Marriage" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Marriage</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="specialization" value="Health" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Health</span>
                    </label>
                  </div>
                </div>

                <!-- Language Filter -->
                <div class="filter-group" id="language_group">
                  <h3 class="text-sm font-bold text-gray-800 mb-3">Language</h3>
                  <div class="space-y-2">
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="language" value="" class="hidden filter-input" checked>
                      <div class="w-4 h-4 rounded border flex items-center justify-center border-gray-300 text-transparent transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 font-semibold group-hover:text-gray-800 transition-colors label-text">All Languages</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="language" value="Hindi" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">Hindi</span>
                    </label>
                    <label class="flex items-center gap-2 cursor-pointer group">
                      <input type="radio" name="language" value="English" class="hidden filter-input">
                      <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center text-transparent group-hover:border-astro-orange transition-colors box-indicator">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                      </div>
                      <span class="text-sm text-gray-600 group-hover:text-gray-800 transition-colors label-text">English</span>
                    </label>
                  </div>
                </div>

                <!-- Availability -->
                <div>
                  <h3 class="text-sm font-bold text-gray-800 mb-3">Availability</h3>
                  <label class="flex items-center justify-between cursor-pointer group" id="availability_toggle_label">
                    <span class="text-sm text-gray-700 font-medium">Available Now</span>
                    <input type="checkbox" id="availability_toggle" class="hidden filter-input" checked>
                    <div id="availability_track" class="relative inline-flex items-center h-5 rounded-full w-9 transition-colors bg-astro-orange">
                      <span id="availability_knob" class="translate-x-4 inline-block w-3.5 h-3.5 transform bg-white rounded-full transition-transform mt-px ml-1 shadow"></span>
                    </div>
                  </label>
                </div>
              </div>
            </div>

            <!-- RIGHT: ASTROLOGER LIST -->
            <div class="flex-1">
              <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                <h2 class="text-xl font-bold text-[#1e293b]">Our Expert Astrologers <span id="astrologer-count" class="text-gray-400 font-medium text-lg"></span></h2>
                
                <div class="flex items-center gap-2">
                  <span class="text-sm text-gray-500 font-medium">Sort by:</span>
                  <div class="relative">
                    <select class="appearance-none bg-white border border-gray-200 text-gray-700 text-sm rounded-lg pl-3 pr-8 py-1.5 outline-none focus:border-astro-orange font-semibold shadow-sm cursor-pointer">
                      <option>Most Popular</option>
                      <option>Experience: High to Low</option>
                      <option>Price: Low to High</option>
                      <option>Price: High to Low</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                  </div>
                </div>
              </div>
              <style>
                .astro-grid-layout {
                  display: grid;
                  grid-template-columns: repeat(3, minmax(0, 1fr));
                  gap: 16px;
                }
                @media (max-width: 1280px) {
                  .astro-grid-layout {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                  }
                }
                @media (max-width: 640px) {
                  .astro-grid-layout {
                    grid-template-columns: minmax(0, 1fr);
                  }
                }
              </style>
              <div class="astro-grid-layout" id="astrologer-grid">
                <!-- Dynamic Content loaded via chat-astrologer-list.js -->
              </div>
            </div>
          </div>
      </div>

      <!-- Missing/Invalid Session State -->
      <div id="invalid-session-workspace" class="hidden flex-1 flex flex-col items-center justify-center text-center">
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 max-w-md w-full">
              <div class="w-16 h-16 bg-red-50 rounded-full flex items-center justify-center mx-auto mb-4 text-red-500">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
              </div>
              <h3 id="invalid-title" class="text-xl font-bold text-gray-900 mb-2">Chat consultation not found</h3>
              <p id="invalid-msg" class="text-sm text-gray-500 mb-6">Please open a valid chat consultation.</p>
              <a href="/Dashboard/My-Consultations" class="inline-flex items-center justify-center w-full bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-xl transition-colors shadow-md">
                  Go to My Consultations
              </a>
          </div>
      </div>

      <!-- 3-Column Layout Grid (Valid Workspace) -->
      <div id="valid-session-workspace" class="hidden flex-1 min-h-0">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 min-h-0 h-full">
        
        <!-- LEFT COLUMN: CHAT LIST -->
        <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col overflow-hidden hidden md:flex">
          <div class="p-4 border-b border-gray-100 shrink-0">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Chats</h2>
            
            <div class="relative mb-4">
              <input type="text" placeholder="Search conversations..." class="w-full bg-gray-50 border-none rounded-xl pl-10 pr-4 py-2.5 text-sm focus:ring-1 focus:ring-orange-200 outline-none">
              <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>

            <!-- Tabs -->
            <div class="flex border-b border-gray-100">
              <button class="flex-1 text-center py-2 text-sm font-bold text-astro-orange border-b-2 border-astro-orange">All</button>
              <button class="flex-1 text-center py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Unread</button>
              <button class="flex-1 text-center py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Archived</button>
            </div>
          </div>
          
          <div id="chat-list-container" class="flex-1 overflow-y-auto custom-scrollbar">
            <!-- Dynamic chats will be loaded here -->
            <div class="text-center text-sm text-gray-500 py-4">Loading chats...</div>
          </div>
        </div>
        
        <!-- CENTER COLUMN: ACTIVE CHAT -->
        <div class="lg:col-span-6 bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col overflow-hidden">
          
          <!-- Chat Header -->
          <div id="chat-header" class="p-4 border-b border-gray-100 flex items-center justify-between shrink-0 bg-white z-10 shadow-[0_4px_10px_-4px_rgba(0,0,0,0.05)] hidden">
            <div class="flex items-center gap-3">
              <button class="md:hidden p-1 mr-1 text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
              </button>
              <div class="relative">
                <img id="chat-astro-img" src="/acharya.png" alt="Astrologer" class="w-11 h-11 rounded-full object-cover border border-gray-100">
              </div>
              <div>
                <h3 class="text-base font-bold text-gray-900 flex items-center gap-2">
                  <span id="chat-astro-name">Astrologer</span>
                  <span class="flex items-center gap-1 text-[10px] font-bold text-green-600 bg-green-50 px-1.5 py-0.5 rounded-full uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    Online
                  </span>
                </h3>
                <p id="chat-astro-info" class="text-xs text-gray-500 mt-0.5">Consultation &nbsp;|&nbsp; Astrologer</p>
              </div>
            </div>
            <div class="flex items-center gap-1 sm:gap-2">
              <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-orange-200 text-astro-orange hover:bg-orange-50 transition-colors text-xs font-bold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span class="hidden sm:inline">Audio Call</span>
              </button>
              <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-orange-200 text-astro-orange hover:bg-orange-50 transition-colors text-xs font-bold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                <span class="hidden sm:inline">Video Call</span>
              </button>
              <button class="p-1.5 text-gray-400 hover:text-gray-600 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
              </button>
            </div>
          </div>

          <!-- Chat Area -->
          <div id="chat-messages" class="flex-1 overflow-y-auto p-4 sm:p-6 chat-bg custom-scrollbar flex flex-col gap-6">
            <div id="chat-empty-state" class="text-center text-sm text-gray-500 mt-20">Select a conversation to start chatting.</div>
            <!-- Scroll Anchor -->
            <div id="chat-bottom"></div>
          </div>

          <!-- Message Composer -->
          <div class="p-3 sm:p-4 bg-white border-t border-gray-100 shrink-0">
            <div class="flex items-center gap-2 bg-gray-50 rounded-2xl p-2 border border-gray-200 focus-within:border-orange-300 focus-within:ring-2 focus-within:ring-orange-50 transition-all">
              <button class="p-2 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </button>
              
              <input id="chat-input-text" type="text" placeholder="Type your message..." class="flex-1 bg-transparent border-none text-sm focus:ring-0 px-1 placeholder-gray-400 text-gray-700 outline-none" autocomplete="off" disabled>
              
              <button class="p-2 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
              </button>
              
              <button class="p-2 text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
              </button>
              
              <button id="chat-btn-send" class="w-10 h-10 rounded-xl bg-astro-orange hover:bg-orange-600 text-white flex items-center justify-center shrink-0 transition-colors shadow-sm disabled:opacity-50" disabled>
                <svg class="w-5 h-5 ml-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
              </button>
            </div>
          </div>
          
        </div>
        
        <!-- RIGHT COLUMN: ASTROLOGER PANEL -->
        <div class="lg:col-span-3 flex flex-col gap-6 overflow-y-auto custom-scrollbar pb-6 hidden xl:flex">
          
          <!-- Astrologer Profile Card -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="relative h-32 bg-orange-50">
              <img src="/acharya.png" alt="Background" class="w-full h-full object-cover opacity-20 blur-sm">
              <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent"></div>
              <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-2 py-1 rounded-full flex items-center gap-1.5 shadow-sm border border-white">
                <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                <span class="text-xs font-bold text-green-600">Online</span>
              </div>
            </div>
            
            <div class="px-5 pb-5 relative -mt-16 text-center">
              <img src="/acharya.png" alt="Acharya Neelima" class="w-24 h-24 rounded-2xl object-cover border-4 border-white shadow-md mx-auto mb-3 bg-white relative z-10">
              
              <h2 class="text-lg font-bold text-gray-900 flex items-center justify-center gap-1">
                Acharya Neelima
                <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              </h2>
              
              <div class="flex items-center justify-center gap-2 text-xs font-medium text-gray-500 mt-1 mb-4">
                <span class="flex items-center text-yellow-500 font-bold">
                  <svg class="w-3.5 h-3.5 mr-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                  4.9
                </span>
                <span class="text-gray-400">(2.1k reviews)</span>
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span>12+ Years Exp.</span>
              </div>

              <div class="flex flex-wrap justify-center gap-1.5 mt-2">
                <span class="px-2 py-1 bg-orange-50 text-orange-700 text-[10px] font-bold uppercase tracking-wider rounded-md">Vedic Astrology</span>
                <span class="px-2 py-1 bg-gray-50 text-gray-600 text-[10px] font-bold uppercase tracking-wider rounded-md border border-gray-100">Love & Relationship</span>
                <span class="px-2 py-1 bg-gray-50 text-gray-600 text-[10px] font-bold uppercase tracking-wider rounded-md border border-gray-100">Marriage</span>
                <span class="px-2 py-1 bg-gray-50 text-gray-600 text-[10px] font-bold uppercase tracking-wider rounded-md border border-gray-100">Kundli Reading</span>
                <span class="px-2 py-1 bg-gray-50 text-gray-600 text-[10px] font-bold uppercase tracking-wider rounded-md border border-gray-100">Career Guidance</span>
              </div>
            </div>
          </div>

          <!-- Current Session Card -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
            <h3 class="font-bold text-gray-900 mb-4 text-sm">Current Session</h3>
            
            <div class="space-y-3.5 text-sm">
              <div class="flex justify-between items-center">
                <span class="text-gray-500 font-medium">Chat Consultation</span>
                <span class="font-bold text-green-600 flex items-center gap-1.5">
                  <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                  Active
                </span>
              </div>
              
              <div class="flex justify-between items-center">
                <span class="text-gray-500 font-medium">Started at</span>
                <span class="font-bold text-gray-900 flex items-center gap-1.5">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  10:20 AM
                </span>
              </div>
              
              <div class="flex justify-between items-center">
                <span class="text-gray-500 font-medium">Duration</span>
                <span class="font-bold text-gray-900 flex items-center gap-1.5">
                  <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  04 Minutes
                </span>
              </div>
              
              <div class="flex justify-between items-center">
                <span class="text-gray-500 font-medium">Rate</span>
                <span class="font-bold text-gray-900">₹30/min</span>
              </div>
              
              <div class="flex justify-between items-center pt-3 border-t border-gray-100">
                <span class="text-gray-500 font-medium">Total Amount</span>
                <span class="font-bold text-gray-900 text-base">₹120</span>
              </div>
            </div>
            
            <button class="w-full mt-5 bg-orange-50 hover:bg-orange-100 text-astro-orange border border-orange-100 font-bold py-2.5 px-4 rounded-xl transition-colors flex items-center justify-center gap-2 group text-sm">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              Extend Chat Session
              <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </button>
          </div>

          <!-- Quick Actions -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 mb-4">
            <h3 class="font-bold text-gray-900 mb-4 text-sm">Quick Actions</h3>
            
            <div class="space-y-4">
              
              <button class="w-full flex items-center gap-3 text-left group">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0 group-hover:bg-blue-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Share Documents</h4>
                  <p class="text-[10px] text-gray-500 uppercase tracking-wide font-medium mt-0.5">Share birth chart, images or files</p>
                </div>
              </button>
              
              <button class="w-full flex items-center gap-3 text-left group">
                <div class="w-10 h-10 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center shrink-0 group-hover:bg-purple-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m14-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-purple-600 transition-colors">View Kundli</h4>
                  <p class="text-[10px] text-gray-500 uppercase tracking-wide font-medium mt-0.5">View your birth chart</p>
                </div>
              </button>
              
              <button class="w-full flex items-center gap-3 text-left group">
                <div class="w-10 h-10 rounded-full bg-orange-50 text-astro-orange flex items-center justify-center shrink-0 group-hover:bg-orange-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-astro-orange transition-colors">Take Notes</h4>
                  <p class="text-[10px] text-gray-500 uppercase tracking-wide font-medium mt-0.5">Save important points</p>
                </div>
              </button>
              
              <button id="btn-end-chat" class="w-full flex items-center gap-3 text-left group">
                <div class="w-10 h-10 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0 group-hover:bg-red-100 transition-colors">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                  <h4 class="text-sm font-bold text-gray-900 group-hover:text-red-600 transition-colors">End Chat</h4>
                  <p class="text-[10px] text-gray-500 uppercase tracking-wide font-medium mt-0.5">End current consultation</p>
                </div>
              </button>

            </div>
          </div>
          
        </div>
      </div>
    </div>
    </div>
  </main>

  <script src="/js/api.js"></script>
  <script src="/js/chat-astrologer-list.js"></script>
  <script>
    let conversations = [];
    let activeConversationId = null;
    let pollInterval = null;
    let lastMessageCount = 0;

    function showNoSessionState() {
        document.getElementById('page-loading')?.classList.add('hidden');
        document.getElementById('valid-session-workspace')?.classList.add('hidden');
        document.getElementById('invalid-session-workspace')?.classList.add('hidden');
        document.getElementById('invalid-session-workspace')?.classList.remove('flex');
        document.getElementById('no-session-workspace')?.classList.remove('hidden');
        document.getElementById('no-session-workspace')?.classList.add('flex');
    }

    function showValidSessionState() {
        document.getElementById('page-loading')?.classList.add('hidden');
        document.getElementById('no-session-workspace')?.classList.add('hidden');
        document.getElementById('no-session-workspace')?.classList.remove('flex');
        document.getElementById('invalid-session-workspace')?.classList.add('hidden');
        document.getElementById('invalid-session-workspace')?.classList.remove('flex');
        document.getElementById('valid-session-workspace')?.classList.remove('hidden');
    }

    function showInvalidSessionState() {
        document.getElementById('page-loading')?.classList.add('hidden');
        document.getElementById('no-session-workspace')?.classList.add('hidden');
        document.getElementById('no-session-workspace')?.classList.remove('flex');
        document.getElementById('valid-session-workspace')?.classList.add('hidden');
        document.getElementById('invalid-session-workspace')?.classList.remove('hidden');
        document.getElementById('invalid-session-workspace')?.classList.add('flex');
    }

    document.addEventListener('DOMContentLoaded', async () => {
      // Sidebar toggle logic for mobile
      const openBtn = document.getElementById('open-sidebar');
      const closeBtn = document.getElementById('close-sidebar');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('mobile-overlay');

      if (openBtn && sidebar && overlay && closeBtn) {
        openBtn.addEventListener('click', () => {
          sidebar.classList.remove('-translate-x-full');
          overlay.classList.remove('hidden');
        });
        closeBtn.addEventListener('click', () => {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        });
        overlay.addEventListener('click', () => {
          sidebar.classList.add('-translate-x-full');
          overlay.classList.add('hidden');
        });
      }

      setupChatEvents();
      
      const urlParams = new URLSearchParams(window.location.search);
      const consultationId = urlParams.get('consultation_id');

      if (!consultationId) {
          showNoSessionState();
          return;
      }
      
      if (consultationId) {
          try {
              const res = await window.api.post('/chat/conversations', { consultation_id: consultationId });
              if (res && res.data) {
                  activeConversationId = res.data.id;
                  showValidSessionState();
                  await loadConversations();
              } else {
                  showInvalidSessionState();
              }
          } catch (err) {
              console.error('Failed to init conversation from consultation', err);
              showInvalidSessionState();
          }
      }
    });
    
    function setupChatEvents() {
        const sendBtn = document.getElementById('chat-btn-send');
        const input = document.getElementById('chat-input-text');
        const closeBtn = document.getElementById('btn-end-chat');
        
        if(sendBtn && input) {
            sendBtn.addEventListener('click', sendMessage);
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') sendMessage();
            });
        }
        
        if (closeBtn) {
            closeBtn.addEventListener('click', async () => {
                if (!activeConversationId) return;
                if (confirm('Are you sure you want to end this chat?')) {
                    try {
                        await window.api.put(`/chat/conversations/${activeConversationId}/close`, {});
                        activeConversationId = null;
                        document.getElementById('chat-header').classList.add('hidden');
                        document.getElementById('chat-input-text').disabled = true;
                        document.getElementById('chat-btn-send').disabled = true;
                        const messagesContainer = document.getElementById('chat-messages');
                        messagesContainer.innerHTML = '<div class="text-center text-sm text-gray-500 mt-20">Chat Ended. Select a conversation.</div>';
                        await loadConversations();
                    } catch (err) {
                        console.error('Failed to close chat', err);
                    }
                }
            });
        }
    }
    
    async function loadConversations() {
        try {
            const res = await window.api.get('/chat/conversations');
            if (res && res.data) {
                conversations = res.data;
                renderConversations();
                
                // If we have an active chat (from URL), select it. Else select first active if exists.
                if (activeConversationId) {
                    selectConversation(activeConversationId);
                } else if (conversations.length > 0) {
                    selectConversation(conversations[0].id);
                }
            }
        } catch (err) {
            console.error('Failed to load conversations', err);
            document.getElementById('chat-list-container').innerHTML = '<div class="text-red-500 text-sm p-4">Failed to load chats.</div>';
        }
    }
    
    function renderConversations() {
        const container = document.getElementById('chat-list-container');
        if (!container) return;
        
        if (conversations.length === 0) {
            container.innerHTML = '<div class="text-center text-sm text-gray-500 p-4">No conversations found.</div>';
            return;
        }
        
        let html = '';
        conversations.forEach(conv => {
            const isActive = activeConversationId == conv.id;
            const borderCls = isActive ? 'border-astro-orange bg-orange-50/50' : 'border-transparent hover:bg-gray-50 border-b border-gray-50';
            const astro = conv.astrologer || {};
            
            html += `
            <div onclick="selectConversation(${conv.id})" class="p-4 border-l-4 ${borderCls} cursor-pointer flex items-center gap-3">
              <div class="relative shrink-0">
                <img src="${astro.profile_image || '/lady.png'}" alt="${astro.display_name}" class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm">
                ${conv.status === 'active' ? '<div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>' : ''}
              </div>
              <div class="flex-1 min-w-0">
                <div class="flex justify-between items-center mb-1">
                  <h3 class="text-sm font-bold text-gray-900 truncate">${astro.display_name || 'Astrologer'}</h3>
                  <span class="text-xs ${isActive ? 'text-astro-orange font-medium' : 'text-gray-400'} shrink-0">${conv.status === 'active' ? 'Active' : 'Closed'}</span>
                </div>
                <div class="flex justify-between items-center">
                  <p class="text-xs text-gray-500 truncate pr-2">Tap to view messages</p>
                </div>
              </div>
            </div>
            `;
        });
        
        container.innerHTML = html;
    }
    
    async function selectConversation(id) {
        activeConversationId = id;
        renderConversations(); // update active class
        
        const conv = conversations.find(c => c.id == id);
        if (conv) {
            document.getElementById('chat-header').classList.remove('hidden');
            document.getElementById('chat-astro-name').innerText = conv.astrologer?.display_name || 'Astrologer';
            if(conv.astrologer?.profile_image) {
                document.getElementById('chat-astro-img').src = conv.astrologer.profile_image;
            }
            
            const input = document.getElementById('chat-input-text');
            const btn = document.getElementById('chat-btn-send');
            if (conv.status === 'active') {
                input.disabled = false;
                btn.disabled = false;
            } else {
                input.disabled = true;
                btn.disabled = true;
                input.placeholder = "Chat closed.";
            }
        }
        
        if (pollInterval) clearInterval(pollInterval);
        
        document.getElementById('chat-messages').innerHTML = '<div class="text-center py-4 text-gray-500 text-sm">Loading messages...</div>';
        lastMessageCount = 0;
        
        await fetchMessages();
        
        if (conv && conv.status === 'active') {
            pollInterval = setInterval(fetchMessages, 3000);
        }
    }
    
    async function fetchMessages() {
        if (!activeConversationId) return;
        
        try {
            const res = await window.api.get(`/chat/conversations/${activeConversationId}/messages`);
            if (res && res.data) {
                renderMessages(res.data);
                
                // Check if there are unread incoming messages and mark read
                const unread = res.data.filter(m => m.sender_type !== 'user' && !m.is_read);
                if (unread.length > 0) {
                    await window.api.put(`/chat/conversations/${activeConversationId}/read`, {});
                }
            }
        } catch (err) {
            console.error('Failed to load messages', err);
        }
    }
    
    function renderMessages(messages) {
        const container = document.getElementById('chat-messages');
        
        if (messages.length === 0) {
            container.innerHTML = '<div class="text-center text-sm text-gray-500 mt-20">No messages yet. Send a message to start.</div>';
            return;
        }
        
        let html = '';
        let lastDate = null;
        
        messages.forEach(msg => {
            const d = new Date(msg.created_at);
            const dateStr = d.toLocaleDateString();
            
            if (dateStr !== lastDate) {
                html += `
                <div class="flex justify-center my-2">
                  <span class="bg-white/90 backdrop-blur border border-gray-100 text-gray-600 text-xs font-semibold px-3 py-1 rounded-full shadow-sm">
                    ${dateStr}
                  </span>
                </div>`;
                lastDate = dateStr;
            }
            
            const t = d.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            if (msg.sender_type === 'user') {
                html += `
                <!-- Message Group: Outgoing -->
                <div class="flex items-end gap-2 max-w-[85%] self-end">
                  <div class="flex flex-col gap-1 items-end w-full">
                    <div class="bg-[#eee5ff] px-4 py-2.5 rounded-2xl rounded-br-sm shadow-sm text-sm text-gray-800">
                      ${msg.message}
                      <div class="flex items-center justify-end gap-1 mt-1">
                        <span class="text-[10px] text-gray-500">${t}</span>
                        <svg class="w-3.5 h-3.5 ${msg.is_read ? 'text-blue-500' : 'text-gray-400'}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7 M5 18l4 4L19 12" style="${msg.is_read ? '' : 'opacity: 0.5'}"></path></svg>
                      </div>
                    </div>
                  </div>
                  <img src="https://ui-avatars.com/api/?name=U&background=eee5ff&color=4f46e5" alt="User" class="w-8 h-8 rounded-full object-cover shrink-0 mb-1 border border-white shadow-sm">
                </div>
                `;
            } else {
                html += `
                <!-- Message Group: Incoming -->
                <div class="flex items-end gap-2 max-w-[85%]">
                  <img src="${document.getElementById('chat-astro-img').src}" alt="Astrologer" class="w-8 h-8 rounded-full object-cover shrink-0 mb-1 border border-white shadow-sm">
                  <div class="flex flex-col gap-1 items-start">
                    <div class="bg-white px-4 py-2.5 rounded-2xl rounded-bl-sm shadow-sm border border-gray-100 text-sm text-gray-800">
                      ${msg.message}
                      <div class="flex justify-end mt-1">
                        <span class="text-[10px] text-gray-400">${t}</span>
                      </div>
                    </div>
                  </div>
                </div>
                `;
            }
        });
        
        html += '<div id="chat-bottom"></div>';
        
        // Only update DOM if count changed to avoid losing scroll or flickering
        if (messages.length !== lastMessageCount) {
            container.innerHTML = html;
            setTimeout(() => {
                const cb = document.getElementById('chat-bottom');
                if (cb) cb.scrollIntoView({ behavior: 'smooth' });
            }, 100);
            lastMessageCount = messages.length;
        }
    }
    
    async function sendMessage() {
        if (!activeConversationId) return;
        
        const input = document.getElementById('chat-input-text');
        const text = input.value.trim();
        
        if (!text) return;
        
        input.value = '';
        input.disabled = true;
        
        try {
            await window.api.post(`/chat/conversations/${activeConversationId}/messages`, { message: text });
            await fetchMessages();
        } catch (err) {
            console.error('Failed to send message', err);
            if(window.showNotification) window.showNotification('Failed to send message', 'error');
        } finally {
            input.disabled = false;
            input.focus();
        }
    }
  </script>
</body>
</html>
