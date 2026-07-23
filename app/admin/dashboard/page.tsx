// app/admin/dashboard/page.tsx
import React from "react";
import Header from "@/components/admin/header";
import Navbar from "@/components/admin/navbar";
import Sidebar from "@/components/admin/sidebar";
import Footer from "@/components/admin/footer";

export const metadata = {
  title: "Dashboard - Monetra",
};

export default function Page() {    
  return (
    <div className="min-h-screen bg-gray-50 text-gray-900">
      {/* 1. Navbar di Paling Atas */}
      <Navbar />

      <div className="flex">
        {/* 2. Sidebar di Sisi Kiri */}
        <Sidebar />

        {/* 3. Pembungkus Konten Utama (Diberi margin-left md:ml-64 agar tidak tertindih sidebar) */}
        <div className="flex flex-1 flex-col min-h-[calc(100vh-4rem)] md:ml-64">
          
          {/* Header Halaman (Judul Page) */}
          <Header title="Dashboard Overview"/>

          {/* Main Area / Body Content */}
          <main className="flex-1 p-6">
            <div className="rounded-2xl border border-dashed border-gray-300 bg-white p-8 text-center shadow-sm">
              <h2 className="text-2xl font-bold text-gray-800">
                Halo! Selamat Datang di Dashboard Admin
              </h2>
              <p className="mt-2 text-sm text-gray-600 max-w-xl mx-auto">
                Pantau dan kelola arus kas Anda di satu tempat bersama <strong>Monetra</strong>. 
                Mulai catat pengeluaran, pantau kategori harian, dan lihat performa finansial Anda dengan mudah.
              </p>
              <span className="mt-4 inline-block text-xs text-gray-400 italic">
                A digital product by CobraDEV
              </span>
            </div>
          </main>

          {/* Footer di Bagian Bawah Konten */}
          <Footer />

        </div>
      </div>
    </div>
  );
}