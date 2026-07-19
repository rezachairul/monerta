// app/home/page.tsx
import React from "react";
import Navbar from "../../components/navbar";
import Footer from "../../components/footer";

export const metadata = {
  title: "Home",
};

export default function Page() {    
  return (
    <div className="flex flex-col h-screen overflow-hidden bg-gray-200">
      <Navbar />
      
      <main className="flex-grow overflow-y-auto">
        <div className="flex flex-col items-center justify-center py-20 px-4">
            <h1 className="text-4xl font-bold text-gray-800">
                Halo! Siap Atur Keuangan Hari Ini?
            </h1>
            <p className="mt-4 text-lg text-gray-600 max-w-xl text-center">
            Pantau dan kelola arus kas Anda di satu tempat bersama <strong>Monetra</strong>. 
            Mulai catat pengeluaran, pantau kategori harian, dan lihat performa finansial Anda dengan mudah.
            </p>
            <span className="mt-2 text-xs text-gray-400 italic">
            A digital product by CobraDEV
            </span>
        </div>
      </main>
      
      <Footer />
    </div>
  );
}