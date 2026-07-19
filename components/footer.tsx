// components/footer.tsx
import React from "react";

export default function Footer() {
  return (
    <footer className="bg-gray-200 text-gray-600 py-4 border-t border-gray-300 z-10 shadow-inner">
      <div className="container mx-auto text-center text-sm">
        &copy; {new Date().getFullYear()} Monetra. All rights reserved.
      </div>
    </footer>
  );
}