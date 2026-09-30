# Astrowjyoti Project Task List

**Total number of pages found: 47**

Below is the complete list of tasks for every website page currently created in the project.

---

Task Name:- Home Page
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, public, landing
Task Desc:- Main landing page of the Astrowjyoti website. Features hero banners, service categories, and highlighted astrologers.
further notes:- Needs backend API integration to fetch dynamic banners, live astrologer statuses, and dynamic testimonials.
file name:- index.php

---

Task Name:- About Us Page
Task Priority:- Low
Task Status:- Frontend Completed
Tags:- frontend, public, static
Task Desc:- Informational page about the platform, its mission, and founders.
further notes:- Mostly static, but could use dynamic CMS integration if the content needs frequent updating.
file name:- About.php

---

Task Name:- Login Page
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, auth, public
Task Desc:- User authentication entry point allowing users to log in with email/phone and password.
further notes:- Pending backend JWT/Session authentication logic and error handling.
file name:- Auth/Login.php

---

Task Name:- Register Page
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, auth, public
Task Desc:- User registration page to create a new Astrowjyoti account.
further notes:- Needs backend user creation API and form validation.
file name:- Auth/Register.php

---

Task Name:- Forgot Password
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, auth, public
Task Desc:- Entry point for password recovery using email or phone.
further notes:- Needs backend integration to trigger password reset emails or SMS OTPs.
file name:- Auth/Forgot-Password.php

---

Task Name:- OTP Verification
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, auth, security
Task Desc:- Screen for verifying one-time passwords during login, registration, or password reset flows.
further notes:- Needs integration with an SMS/Email gateway (e.g., Twilio, AWS SNS) and backend OTP validation logic.
file name:- Auth/OTP-Verification.php

---

Task Name:- Reset Password
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, auth, security
Task Desc:- Page to set a new password after successful OTP/token verification.
further notes:- Needs backend endpoint to securely update the user's password hash in the database.
file name:- Auth/Reset-Password.php

---

Task Name:- Daily Horoscope
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, astrology, content
Task Desc:- Displays daily astrological predictions for all zodiac signs.
further notes:- Requires backend astrology API (e.g., Vedic Rishi or similar) to fetch daily automated predictions.
file name:- Astrology/Daily-Horoscope.php

---

Task Name:- Weekly Horoscope
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, astrology, content
Task Desc:- Displays weekly astrological predictions for all zodiac signs.
further notes:- Requires backend astrology API integration.
file name:- Astrology/Weekly-Horoscope.php

---

Task Name:- Monthly Horoscope
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, astrology, content
Task Desc:- Displays monthly astrological predictions for all zodiac signs.
further notes:- Requires backend astrology API integration.
file name:- Astrology/Monthly-Horoscope.php

---

Task Name:- Yearly Horoscope
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, astrology, content
Task Desc:- Displays comprehensive yearly astrological predictions.
further notes:- Requires backend astrology API integration.
file name:- Astrology/Yearly-Horoscope.php

---

Task Name:- Kundli Generation (Astrology)
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, astrology, kundli
Task Desc:- Interface for users to input birth details to generate a Kundli (birth chart).
further notes:- Heavy backend requirement. Needs integration with an astrological calculation engine to generate planetary positions and D1 charts.
file name:- Astrology/Kundli.php

---

Task Name:- Kundli Generation (Services)
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, services, kundli
Task Desc:- Alternate entry point/landing page for Free Kundli generation.
further notes:- Will share backend logic with Astrology/Kundli.php.
file name:- Services/Free-Kundli.php

---

Task Name:- Kundli Matching (Astrology)
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, astrology, kundli, matching
Task Desc:- Form to input details of two individuals for Ashtakoot Milan (matchmaking).
further notes:- Needs backend astrology engine to calculate the 36 Gunas and return compatibility scores.
file name:- Astrology/Kundli-Matching.php

---

Task Name:- Kundli Matching (Services)
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, services, kundli, matching
Task Desc:- Alternate landing page for Kundli matchmaking services.
further notes:- Will share backend matching logic.
file name:- Services/Kundli-Matching.php

---

Task Name:- Tarot Reading (Astrology)
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, astrology, tarot
Task Desc:- Interface for virtual Tarot card readings.
further notes:- Needs backend logic to randomize cards and fetch associated interpretations.
file name:- Astrology/Tarot-Reading.php

---

Task Name:- Tarot Reading (Services)
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, services, tarot
Task Desc:- Alternate landing page for Tarot services.
further notes:- Will share backend tarot logic.
file name:- Services/Tarot.php

---

Task Name:- Numerology
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, astrology, numerology
Task Desc:- Calculator for life path, destiny, and soul urge numbers based on name and DOB.
further notes:- Needs backend or robust frontend JS logic to calculate numerology numbers and fetch interpretations.
file name:- Astrology/Numerology.php

---

Task Name:- Compatibility
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, services, matching
Task Desc:- Zodiac sign-based compatibility checker.
further notes:- Needs backend data matrix for zodiac interactions.
file name:- Services/Compatibility.php

---

Task Name:- Public Talk to Astrologer
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, public, listings, consultations
Task Desc:- Public directory listing astrologers available for audio calls. Features filtering and sorting.
further notes:- Needs backend API to fetch astrologer profiles, live statuses, and handle complex filtering (price, rating, expertise).
file name:- Consultations/Talk-to-Astrologer.php

---

Task Name:- Public Chat with Astrologer
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, public, listings, consultations
Task Desc:- Public directory listing astrologers available for text chat.
further notes:- Shared backend requirements with Talk-to-Astrologer (fetching profiles, statuses).
file name:- Consultations/Chat-with-Astrologer.php

---

Task Name:- Public Video Consultation
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, public, listings, consultations
Task Desc:- Public directory listing astrologers available for video calls.
further notes:- Shared backend listing logic.
file name:- Consultations/Video-Consultation.php

---

Task Name:- Astrologer Profile
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, booking, profile
Task Desc:- Detailed public profile for an individual astrologer showing reviews, expertise, pricing, and availability.
further notes:- Needs backend dynamic routing (e.g., passing astrologer ID) to fetch specific profile data and review aggregates.
file name:- Booking/Astrologer-Profile.php

---

Task Name:- Consultation Form (Intake)
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, booking, form
Task Desc:- Intake form where users provide their problem area and birth details before a consultation.
further notes:- Needs backend validation and temporary session storage for the booking payload.
file name:- Booking/Consultation-Form.php

---

Task Name:- Date & Time Selection
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, booking, scheduling
Task Desc:- Calendar and timeslot selector for scheduling future consultations.
further notes:- Needs integration with astrologer calendar API to fetch available slots and prevent double-booking.
file name:- Booking/Date-Time.php

---

Task Name:- Booking Summary
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, booking, summary
Task Desc:- Final review page showing consultation details, duration, taxes, and total cost before payment.
further notes:- Needs backend calculation endpoint to apply coupons, calculate GST, and lock in the price.
file name:- Booking/Booking-Summary.php

---

Task Name:- Payment Gateway Interface
Task Priority:- Critical
Task Status:- Frontend Completed
Tags:- frontend, payment, gateway
Task Desc:- Page where the user selects a payment method and initiates the transaction.
further notes:- Needs heavy backend integration with a payment provider (Razorpay, Stripe, PayU). Requires secure token generation and webhook handling.
file name:- Booking/Payment.php

---

Task Name:- Payment Success
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, payment, confirmation
Task Desc:- Success screen shown after a verified transaction.
further notes:- Needs backend verification (e.g., verifying Razorpay signature) before rendering this page to prevent spoofing.
file name:- Booking/Payment-Success.php

---

Task Name:- Payment Failed
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, payment, error
Task Desc:- Error screen shown when a transaction is declined or fails.
further notes:- Needs retry logic and backend logging of failed transaction attempts.
file name:- Booking/Payment-Failed.php

---

Task Name:- Live Chat Interface
Task Priority:- Critical
Task Status:- Frontend Completed
Tags:- frontend, chat, realtime
Task Desc:- The actual messaging interface where user and astrologer communicate.
further notes:- Requires WebSockets (Socket.io) or Firebase backend for real-time messaging, typing indicators, and message persistence.
file name:- Chat/Chat.php

---

Task Name:- Chat History
Task Priority:- Low
Task Status:- Frontend Completed
Tags:- frontend, chat, history
Task Desc:- View past chat transcripts.
further notes:- Needs backend fetch from the messaging database archive.
file name:- Chat/Chat-History.php

---

Task Name:- Live Video Room
Task Priority:- Critical
Task Status:- Frontend Completed
Tags:- frontend, video, realtime
Task Desc:- The active WebRTC video call room for face-to-face consultations.
further notes:- Heavy integration required with a video API provider (Agora, Twilio Video, Daily.co) for signaling, streaming, and connection state management.
file name:- Video/Video-Consultation.php

---

Task Name:- Main Dashboard
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, dashboard, user
Task Desc:- The central hub for authenticated users, showing upcoming consultations, wallet balance, and quick actions.
further notes:- Needs composite backend API to fetch user summary, active bookings, and wallet state simultaneously.
file name:- Dashboard/Dashboard.php

---

Task Name:- Authenticated Talk to Astrologer
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, dashboard, listings
Task Desc:- In-dashboard version of the astrologer listing tailored for logged-in users.
further notes:- Shares backend logic with public listings but might include personalized recommendations.
file name:- Dashboard/Talk-to-Astrologer.php

---

Task Name:- My Consultations
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, dashboard, history
Task Desc:- User's historical and upcoming schedule of consultations (Chat, Call, Video).
further notes:- Needs backend API to query the `bookings` or `consultations` table filtered by the authenticated user ID.
file name:- Dashboard/My-Consultations.php

---

Task Name:- Consultation Details
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, dashboard, history
Task Desc:- Detailed view of a specific past consultation, including duration, astrologer notes, and payment breakdown.
further notes:- Needs backend route accepting a consultation ID to fetch specific transaction and interaction metadata.
file name:- Dashboard/Consultation-Details.php

---

Task Name:- Favorites
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, dashboard, user
Task Desc:- Grid of astrologers the user has bookmarked or saved for quick access.
further notes:- Needs backend API referencing a many-to-many user-favorites table.
file name:- Dashboard/Favorites.php

---

Task Name:- Wallet & Payments
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, dashboard, wallet, payment
Task Desc:- Financial hub for the user to add funds, view transaction history, and manage payment methods.
further notes:- Critical backend integration required for wallet ledger management, recharge gateways, and transaction array fetching.
file name:- Dashboard/Wallet-and-Payments.php

---

Task Name:- View Profile
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, dashboard, profile
Task Desc:- Read-only display of the user's personal details and account status.
further notes:- Needs backend profile fetch based on JWT/Session.
file name:- Dashboard/Profile.php

---

Task Name:- Edit Profile
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, dashboard, profile, forms
Task Desc:- Form interface allowing the user to update their demographics, avatar, and contact info.
further notes:- Needs backend PUT/PATCH API endpoint for user updates and handling multipart/form-data for avatar uploads.
file name:- Dashboard/Edit-Profile.php

---

Task Name:- Global Settings
Task Priority:- Medium
Task Status:- Frontend Completed
Tags:- frontend, dashboard, settings
Task Desc:- Master settings page consolidating Profile, Security, Notifications, and App Preferences into tabbed views.
further notes:- Needs composite backend logic to handle updates across user details, preferences, and security models.
file name:- Dashboard/Settings.php

---

Task Name:- Change Password
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, dashboard, security
Task Desc:- Dedicated screen for updating account passwords securely.
further notes:- Needs backend logic to verify the old password hash before salting and storing the new one.
file name:- Dashboard/Change-Password.php

---

Task Name:- Notifications
Task Priority:- Low
Task Status:- Frontend Completed
Tags:- frontend, dashboard, notifications
Task Desc:- Log of system alerts, consultation reminders, and promotional messages.
further notes:- Needs backend notification center or push-notification logging system.
file name:- Dashboard/Notifications.php

---

Task Name:- Global Dashboard Header
Task Priority:- Critical
Task Status:- Frontend Completed
Tags:- frontend, component, global
Task Desc:- The top navigation bar shared across all authenticated Dashboard views.
further notes:- Contains logic for user dropdowns and notification badges which require backend integration.
file name:- Dashboard/header.php

---

Task Name:- Global Dashboard Sidebar
Task Priority:- Critical
Task Status:- Frontend Completed
Tags:- frontend, component, global
Task Desc:- The side navigation menu shared across all authenticated Dashboard views. Manages active-state highlighting based on URL routing.
further notes:- Complete.
file name:- Dashboard/sidebar.php

---

Task Name:- Astrologer Card Component
Task Priority:- High
Task Status:- Frontend Completed
Tags:- frontend, component, reusable
Task Desc:- Reusable UI card displaying an astrologer's photo, rating, pricing, and action buttons.
further notes:- Currently hardcoded mock data. Needs to be wired to accept a dynamic PHP/JSON object representing the astrologer.
file name:- Components/AstrologerCard.php

---

Task Name:- PHP Router
Task Priority:- Critical
Task Status:- Backend Completed (Development)
Tags:- backend, routing, infrastructure
Task Desc:- The primary local development routing script mapping clean URLs to `.php` files.
further notes:- In production, this will likely be replaced or augmented by `.htaccess` rules (Apache) or `nginx.conf`.
file name:- router.php

---
