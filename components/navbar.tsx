// components/navbar.tsx
'use client';

import React, { useState } from "react";
import Image from "next/image";
import Link from "next/link";

// components/navbar.tsx
export default function Navbar() {
  return (
    <nav className="bg-gray-200 text-gray-800 py-4 px-6 border-b border-gray-300 shadow-sm">
      <div className="container mx-auto flex justify-between items-center">

        {/* LOGO & BRAND */}
        <div className="flex items-center gap-3">
          <Image
            src="/assets/img/monerta_logo.svg"
            alt="Monetra Logo"
            width={32}
            height={32}
          />
          <span className="text-lg font-bold text-gray-950">
            Monetra
          </span>
        </div>

        {/* NAVIGATION */}
        <div className="flex gap-2">
          <Link href="/home" className="px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">
            Home
          </Link>

          <Link href="/about" className="px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">
            About
          </Link>

          <Link href="/contact" className="px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">
            Contact
          </Link>
        </div>

        {/* LOGIN */}
        <Link href="/auth/login" className="px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-900 transition-colors">
          Masuk
        </Link>

      </div>
    </nav>
  );
}