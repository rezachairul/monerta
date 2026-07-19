// app/home/app.tsx
import React from "react";
import Navbar from "../../components/navbar";
import Footer from "../../components/footer";

export const metadata = {
  title: "Home",
};

export default function Home() {    
  return (
    // h-screen dan overflow-hidden memastikan layout tidak scroll secara global
    <div className="flex flex-col h-screen overflow-hidden bg-gray-200">
      <Navbar />
      
      {/* flex-grow dan overflow-y-auto membuat hanya area ini yang bisa di-scroll */}
      <main className="flex-grow overflow-y-auto">
        {/* Hapus min-h-screen di sini agar padding atau content panjangnya natural */}
        <div className="flex flex-col items-center justify-center py-20 px-4">
          <h1 className="text-4xl font-bold text-gray-800">Welcome to Monetra</h1>
          <p className="mt-4 text-lg text-gray-600">
            Manage your money and finances with ease.
          </p>
          {/* Tambahan space konten tiruan untuk mengetes scroll jika diperlukan */}
          <div className="h-[1000px] mt-8 bg-white/50 w-full max-w-2xl rounded-lg p-4 text-center text-gray-400">
            (Konten panjang di sini untuk test scroll area...)
          </div>
        </div>
      </main>
      
      <Footer />
    </div>
  );
}