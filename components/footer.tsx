// components/footer.tsx
import React from "react";

import {
  IconBrandFacebook,
  IconBrandInstagram,
  IconBrandTiktok,
  IconBrandX,
  IconBrandYoutube,
} from '@tabler/icons-react';

export default function Footer() {
  return (
    <footer className="bg-gray-200 text-gray-600 py-6 border-t border-gray-300 z-10 shadow-inner px-6">
      <div className="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
        
        {/* Bagian Hak Cipta (Kiri) */}
        <div className="text-sm text-center md:text-left order-2 md:order-1">
          &copy; {new Date().getFullYear()} Monetra. A digital product by <a href="https://cobradev.vercel.app/" target="_blank" rel="noopener noreferrer" className="text-gray-600 hover:text-gray-900">CobraDEV</a>. All rights reserved. 
        </div>
        
        {/* Bagian Media Sosial (Kanan) */}
        <div className="flex justify-center space-x-5 order-1 md:order-2">
          <a href="#" className="text-gray-500 hover:text-black transition-colors" aria-label="TikTok">
            <IconBrandTiktok size={20} />
          </a>
          <a href="#" className="text-gray-500 hover:text-red-600 transition-colors" aria-label="YouTube">
            <IconBrandYoutube size={20} />
          </a>
          <a href="#" className="text-gray-500 hover:text-gray-900 transition-colors" aria-label="X (Twitter)">
            <IconBrandX size={20} />
          </a>
          <a href="#" className="text-gray-500 hover:text-blue-600 transition-colors" aria-label="Facebook">
            <IconBrandFacebook size={20} />
          </a>
          <a href="#" className="text-gray-500 hover:text-pink-600 transition-colors" aria-label="Instagram">
            <IconBrandInstagram size={20} />
          </a>
        </div>

      </div>
    </footer>
  );
}