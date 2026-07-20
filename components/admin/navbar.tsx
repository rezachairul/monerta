// components/admin/navbar.tsx
'use client';

import React, { useState } from "react";
import Image from "next/image";
import Link from "next/link";

import {
  IconBell,
  IconBellRinging,
  IconMoon,
  IconSun,
  IconUserCircle,
} from '@tabler/icons-react';

export default function Navbar() {
  const [isDarkMode, setIsDarkMode] = useState(false);
  const [hasNotification, setHasNotification] = useState(true);

  return (
    <nav className="sticky top-0 z-50 w-full border-b border-gray-200 bg-white/95 px-6 py-3 backdrop-blur shadow-sm dark:border-gray-800 dark:bg-gray-950 text-gray-800 dark:text-gray-200">
      <div className="flex h-14 items-center justify-between">

        {/* 1. LEFT SIDE: LOGO & BRAND */}
        <Link href="/admin/dashboard" className="flex items-center gap-3 hover:opacity-90 transition-opacity">
          <Image src="/assets/img/monerta_logo.svg" alt="Monetra Logo" width={34} height={34} className="h-8 w-8 object-contain" />
          <span className="text-xl font-bold tracking-tight text-gray-950 dark:text-white">
            Monetra
          </span>
        </Link>

        {/* 2. RIGHT SIDE: GLOBAL ACTIONS (Dikelompokkan dalam satu div parent) */}
        <div className="flex items-center gap-4">
          
          {/* Notification Button */}
          <button type="button"  className="relative p-2 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" title="Notifications">
            {hasNotification ? (
              <>
                <IconBellRinging className="h-5 w-5 text-amber-500 animate-wiggle" />
                <span className="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500" />
              </>
            ) : (
              <IconBell className="h-5 w-5" />
            )}
          </button>
          
          {/* Theme Toggle Button */}
          <button type="button" onClick={() => setIsDarkMode(!isDarkMode)} className="p-2 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" title={isDarkMode ? "Switch to Light Mode" : "Switch to Dark Mode"}>
            {isDarkMode ? (
              <IconSun className="h-5 w-5 text-amber-500" />
            ) : (
              <IconMoon className="h-5 w-5" />
            )}
          </button>        

          {/* Divider kecil pemisah aksesoris & profil */}
          <div className="h-6 w-px bg-gray-200 dark:bg-gray-800" />

          {/* Profile Dropdown Button */}
          <button type="button" className="flex items-center gap-2 p-1.5 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" title="Profile Settings">
            <IconUserCircle className="h-6 w-6" />
          </button>

        </div>

      </div>
    </nav>
  );
}