// components/navbar.tsx
import React from "react";
import Image from "next/image";

export default function Navbar() {
  return (
    <nav className="bg-gray-200 text-gray-800 py-4 px-6 border-b border-gray-300 z-10 shadow-sm">
      <div className="container mx-auto flex justify-between items-center">
        
        {/* LOGO & BRAND SECTION */}
        <div className="flex items-center gap-3">
          <Image 
            src="/assets/img/monerta_logo.svg"
            alt="Monetra Logo" 
            width={32}
            height={32}
            className="object-contain"
          />
          <span className="text-lg font-bold text-gray-950">Monetra</span>
        </div>

        {/* NAVIGATION LINKS */}
        <div className="flex gap-2">
          <a href="/home" className="px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">
            Home
          </a>
          <a href="/about" className="px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">
            About
          </a>
          <a href="/contact" className="px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">
            Contact
          </a>
        </div>

      </div>
    </nav>
  );
}