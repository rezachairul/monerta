// components/admin/header.tsx
'use client';

import React from "react";

interface HeaderProps {
  title: string;
}

export default function Header({ title }: HeaderProps) {
  return (
    <header className="px-6 py-4">
      <div className="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        
        {/* Judul & Sub-judul Halaman */}
        <div>
          <h1 className="text-xl font-bold mt-4 tracking-tight text-gray-900 sm:text-2xl">
            {title}
          </h1>
        </div>
      </div>
    </header>
  );
}