<?php
// Frontend/Components/AstrologerCard.php
// Expected $astro array structure:
// $astro = [
//   'id' => 1,
//   'name' => 'Acharya Neelima',
//   'image' => '/acharya.png',
//   'status' => 'Online', // Online, Offline, Busy
//   'experience' => '8+ Years',
//   'specializations' => ['Love', 'Marriage', 'Career'],
//   'languages' => 'Hindi, English',
//   'rating' => '4.8',
//   'reviews' => '2.1K',
//   'price' => '60',
//   'is_favorite' => true
// ];
if (!isset($astro)) return;
$isOnline = strtolower($astro['status']) === 'online';
$statusColor = $isOnline ? 'bg-[#F0FDF4] text-[#15803D] border-green-100' : 'bg-gray-50 text-gray-600 border-gray-200';
$statusDot = $isOnline ? 'bg-[#22C55E]' : 'bg-gray-400';
$favColor = !empty($astro['is_favorite']) ? 'text-[#EF4444] fill-current' : 'text-gray-400';
?>
<div class="bg-[#FFFDF9] rounded-3xl border border-orange-100 shadow-sm p-4 relative flex-col hover:shadow-md transition-shadow group w-full mx-auto" style="max-width: 280px; display: flex;">

  <div class="w-full rounded-2xl bg-orange-50 overflow-hidden relative flex justify-center items-end border border-orange-50/50" style="height: 160px; position: relative;">
    <div class="absolute inset-0 bg-gradient-to-b from-orange-100/40 to-transparent" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>

    <span class="shadow-sm border <?= $statusColor ?>" style="position: absolute; top: 10px; left: 10px; font-size: 11px; font-weight: bold; padding: 4px 8px; border-radius: 9999px; display: flex; align-items: center; gap: 4px; z-index: 10;">
      <span class="<?= $statusDot ?>" style="width: 6px; height: 6px; border-radius: 50%;"></span> <?= htmlspecialchars($astro['status']) ?>
    </span>

    <button onclick="toggleFavorite(<?= $astro['id'] ?>, this)" class="shadow-sm border border-gray-100 transition-colors" style="position: absolute; top: 10px; right: 10px; background-color: white; padding: 6px; border-radius: 50%; z-index: 10; cursor: pointer;">
      <svg style="width: 18px; height: 18px;" class="<?= $favColor ?> transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
      </svg>
    </button>

    <img src="<?= htmlspecialchars($astro['image']) ?>" alt="<?= htmlspecialchars($astro['name']) ?>" class="w-full h-full relative z-0 transition-transform duration-500" style="width: 100%; height: 100%; object-fit: cover; object-position: top; z-index: 0;" onerror="this.src='https://i.pravatar.cc/150?u=<?= $astro['id'] ?>'">
  </div>

  <div class="pt-4 flex flex-col flex-grow">
    <h3 class="font-bold text-gray-900 leading-tight truncate" style="font-size: 16px;"><?= htmlspecialchars($astro['name']) ?>
       <svg class="w-4 h-4 text-orange-500 inline-block ml-0.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
    </h3>
    <div class="flex items-center gap-1" style="margin-top: 4px;">
      <svg style="width: 14px; height: 14px; color: #F97316; fill: #F97316;" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
      <span class="font-bold text-gray-900" style="font-size: 13px;"><?= htmlspecialchars($astro['rating']) ?></span>
      <span class="font-medium text-gray-400" style="font-size: 11px;">(<?= htmlspecialchars($astro['reviews']) ?> reviews) &nbsp;|&nbsp; <?= htmlspecialchars($astro['experience']) ?> Exp.</span>
    </div>

    <div class="flex flex-wrap gap-1.5 mb-3" style="margin-top: 10px;">
      <?php foreach (array_slice($astro['specializations'], 0, 4) as $spec): ?>
        <span class="bg-gray-50 border border-gray-100 text-gray-600 font-medium px-2 py-1 rounded-full whitespace-nowrap" style="font-size: 10px;"><?= htmlspecialchars($spec) ?></span>
      <?php endforeach; ?>
    </div>
    
    <!-- Pricing Row (For Favorites Layout) -->
    <div class="grid grid-cols-3 gap-2 mt-auto mb-3 border-t border-gray-100 pt-3">
      <div class="text-center">
        <div class="font-bold text-gray-900 text-xs">₹ <?= isset($astro['chatPrice']) ? htmlspecialchars($astro['chatPrice']) : htmlspecialchars($astro['price']) ?><span class="text-gray-500 font-medium text-[10px]">/min</span></div>
        <div class="text-[10px] text-gray-500 mt-0.5">Chat</div>
      </div>
      <div class="text-center border-l border-gray-100">
        <div class="font-bold text-gray-900 text-xs">₹ <?= isset($astro['audioPrice']) ? htmlspecialchars($astro['audioPrice']) : htmlspecialchars($astro['price']) ?><span class="text-gray-500 font-medium text-[10px]">/min</span></div>
        <div class="text-[10px] text-gray-500 mt-0.5">Audio</div>
      </div>
      <div class="text-center border-l border-gray-100">
        <div class="font-bold text-gray-900 text-xs">₹ <?= isset($astro['videoPrice']) ? htmlspecialchars($astro['videoPrice']) : htmlspecialchars($astro['price']) ?><span class="text-gray-500 font-medium text-[10px]">/min</span></div>
        <div class="text-[10px] text-gray-500 mt-0.5">Video</div>
      </div>
    </div>

    <div class="grid grid-cols-3 gap-2">
      <button onclick="window.location.href='/Chat/Chat'" class="w-full text-astro-orange bg-white border border-orange-200 font-semibold rounded-lg flex items-center justify-center gap-1 transition-colors hover:bg-orange-50" style="padding: 6px 0; font-size: 11px;">
        <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
        Chat
      </button>
      <button onclick="window.location.href='/Consultations/Talk-to-Astrologer'" class="w-full text-astro-orange bg-white border border-orange-200 font-semibold rounded-lg flex items-center justify-center gap-1 transition-colors hover:bg-orange-50" style="padding: 6px 0; font-size: 11px;">
        <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
        Call
      </button>
      <button onclick="window.location.href='/Video/Video-Consultation'" class="w-full text-white bg-astro-orange border border-astro-orange font-semibold rounded-lg flex items-center justify-center gap-1 transition-colors hover:bg-orange-600" style="padding: 6px 0; font-size: 11px;">
        <svg style="width: 12px; height: 12px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
        Video
      </button>
    </div>
  </div>
</div>
