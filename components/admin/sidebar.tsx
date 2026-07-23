// components/admin/sidebar.tsx

'use client';

import React, { useState } from "react";
import Link from "next/link";
import { usePathname } from "next/navigation"; // Bagus untuk deteksi menu yang sedang aktif

import {
  IconCashRegister,
  IconMoneybagPlus,
  IconReceiptDollar,
  IconSettings,
  IconHomeDollar,
  IconChevronDown,
  IconHistory,
  IconReportAnalytics,
} from '@tabler/icons-react';

export default function Sidebar() {
  const pathname = usePathname();
  
  // State untuk membuka/menutup sub-menu Transactions
  const [isTxOpen, setIsTxOpen] = useState(true);

  // Helper function untuk styling menu aktif
  const isActive = (path: string) => pathname === path;

  return (
    <aside className="fixed bottom-0 left-0 top-16 z-40 hidden w-64 border-r border-gray-200 bg-white px-4 py-6 dark:border-gray-800 dark:bg-gray-950 md:block">
      <div className="flex h-full flex-col justify-between">
        
        {/* MENU UTAMA */}
        <nav className="space-y-6">
          
          {/* Kelompok Menu: Core */}
          <div>
            <p className="px-3 text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">
              Overview
            </p>
            <ul className="mt-2 space-y-1">
              <li>
                <Link 
                  href="/admin/dashboard" 
                  className={`flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-all ${
                    isActive('/admin/dashboard') 
                      ? 'bg-emerald-50 text-emerald-600 dark:bg-emerald-950/50 dark:text-emerald-400' 
                      : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-900 dark:hover:text-gray-100'
                  }`}
                >
                  <IconHomeDollar className={`h-5 w-5 ${isActive('/admin/dashboard') ? 'text-emerald-500' : ''}`} />
                  Dashboard
                </Link>
              </li>
            </ul>
          </div>

          {/* Kelompok Menu: Management */}
          <div>
            <p className="px-3 text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">
              Finance
            </p>
            <ul className="mt-2 space-y-1">
              {/* Menu Utama: Transactions (Dropdown Toggle) */}
              <li>
                <button
                  onClick={() => setIsTxOpen(!isTxOpen)}
                  className={`flex honesty w-full items-center justify-between rounded-lg px-3 py-2.5 text-sm font-medium text-gray-600 transition-all hover:bg-gray-50 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-900 dark:hover:text-gray-100`}>
                  <div className="flex items-center gap-3">
                    <IconCashRegister className="h-5 w-5" />
                    <span>Transactions</span>
                  </div>
                  <IconChevronDown className={`h-4 w-4 transition-transform duration-200 ${isTxOpen ? 'rotate-180' : ''}`} />
                </button>

                {/* SUB-MENU ANIMATED CONTAINER */}
                <div className={`mt-1 overflow-hidden transition-all duration-300 space-y-1 pl-4 ${
                  isTxOpen ? 'max-h-40 opacity-100' : 'max-h-0 opacity-0'
                }`}>
                  {/* Sub-menu 1: All Transactions */}
                  <Link 
                    href="/admin/transactions" 
                    className={`flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium border-l-2 transition-all ${isActive('/admin/transactions') ? 'border-emerald-500 text-emerald-600 bg-emerald-50/30 dark:bg-emerald-950/20 dark:text-emerald-400' : 'border-transparent text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100'}`}>
                    <IconHistory className="h-4 w-4" />
                    All History
                  </Link>

                  {/* Sub-menu 2: Income */}
                  <Link 
                    href="/admin/income" 
                    className={`flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium border-l-2 transition-all ${isActive('/admin/income') ? 'border-green-500 text-green-600 bg-green-50/30 dark:bg-green-950/20 dark:text-green-400' : 'border-transparent text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100'}`}>
                    <IconMoneybagPlus className="h-4 w-4 text-green-500" />
                    Income
                  </Link>

                  {/* Sub-menu 3: Expense */}
                  <Link 
                    href="/admin/expense" 
                    className={`flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium border-l-2 transition-all ${isActive('/admin/expense') ? 'border-rose-500 text-rose-600 bg-rose-50/30 dark:bg-rose-950/20 dark:text-rose-400' : 'border-transparent text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100'}`}>
                    <IconReceiptDollar className="h-4 w-4 text-rose-500" />
                    Expense
                  </Link>
                </div>
              </li>

              {/* Report */}
              <li>
                <Link 
                  href="/admin/reports" 
                  className={`flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium border-l-2 transition-all ${isActive('/admin/reports') ? 'border-blue-500 text-blue-600 bg-blue-50/30 dark:bg-blue-950/20 dark:text-blue-400' : 'border-transparent text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100'}`}>
                  <IconReportAnalytics className="h-5 w-5" />
                  Reports
                </Link>
              </li>
            </ul>
          </div>

        </nav>

        {/* MENU BAWAH: SETTINGS & PROFILE */}
        <div className="border-t border-gray-100 pt-4 dark:border-gray-800">
          <Link 
            href="/admin/settings" 
            className={`flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-all ${isActive('/admin/settings') ? 'bg-gray-100 text-gray-900 dark:bg-gray-800 dark:text-white' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-900 dark:hover:text-gray-100'}`}>
            <IconSettings className="h-5 w-5 text-amber-500 dark:text-amber-400" />
            Profile & Settings
          </Link>
        </div>

      </div>
    </aside>
  );
}