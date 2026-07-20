// components/admin/footer.tsx
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
      {/* Bagian Hak Cipta Tengah */}
      <div className="flex flex-col items-center justify-center gap-2">
        <span className="text-sm text-center text-gray-600">
          &copy; {new Date().getFullYear()} Monetra. A digital product by <a href="https://cobradev.vercel.app/" target="_blank" rel="noopener noreferrer" className="text-gray-600 hover:text-gray-900">CobraDEV</a>. All rights reserved.
        </span>
      </div>
    </footer>
  );
}