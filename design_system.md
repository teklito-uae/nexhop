# Nexhop Computers - Elite B2B Design System

This document outlines the strict typography, spacing, and styling rules for developing the Nexhop platform. Adhere to these guidelines to ensure the site maintains a high-authority, high-volume IT distributor aesthetic.

## 1. Typography (`font-[Poppins]`)
We use the Poppins font family exclusively. We rely on extreme font weights and specific letter spacing to project enterprise authority.

### Headings (H1, H2)
- **Size Limit**: Do not use oversized fonts. Restrict primary headings to `text-3xl` or `text-4xl` maximum, even on desktop.
- **Weight**: `font-black` (900) or `font-extrabold` (800).
- **Tracking**: `tracking-tight` or `tracking-tighter`.
- **Line Height**: `leading-tight` or `leading-snug` to keep headings compact.
- **Color**: `text-gray-900` (Light) / `text-white` (Dark).

### Subheadings (H3, H4) & Eyebrows
- **Size**: Keep font size minimal (`text-base`, `text-sm`, or `text-[10px]` for overlines).
- **Weight**: `font-bold` or `font-black`.
- **Transform**: `uppercase` for overlines/eyebrows.
- **Tracking**: `tracking-widest` or `tracking-[0.2em]` for overlines.
- **Color**: Accent color (e.g., `text-blue-600` or brand-specific).

### Body Text (Paragraphs)
- **Size**: `text-sm` or `text-xs`.
- **Weight**: `font-medium`.
- **Line Height**: `leading-relaxed` or `leading-loose` to provide required breathing room against the strict headings.
- **Color**: Muted (`text-gray-500` / `dark:text-slate-400`).

### CTAs & Links
- **Size & Weight**: `text-[10px]` to `text-sm`, `font-bold`.
- **Transform**: `uppercase`.
- **Tracking**: `tracking-wider`.

---

## 2. Layout & Spacing (Hyper-Premium Spacing)
The primary difference between a cheap site and an "Elite" B2B site is whitespace. Do not cram elements together.

- **Vertical Clearances**:
  - **Hero Sections**: Maximum padding (`pt-64` to `pt-96` desktop, `pt-48` mobile).
  - **Standard Sections**: Minimum `py-16` to `py-24` (`py-12` mobile).
  - **Showcase Sections**: Extra deep padding (`py-32` to `py-48`) to separate major conceptual shifts.
- **Container Constraints**: Always restrict content bandwidth using `max-w-7xl mx-auto px-4 sm:px-6 lg:px-8`.
- **Bento Grid Architecture**: Prefer non-uniform grid layouts (mixing 1x1, 1x2, 2x2 spans) for categories/capabilities to create a technical, "digital dashboard" feel rather than standard rows.

---

## 3. Visual Styling ("Thin-Stroke" Aesthetic)
Remove heavy dropshadows. Crisp lines look engineered and technical; heavy shadows look dated.

- **Borders over Shadows**:
  - Rely on delicate, structural borders (`border border-gray-100 dark:border-white/5` or `dark:border-white/10`).
  - Keep shadows to an absolute minimum (`shadow-sm`) or remove them entirely from base cards.
- **Corner Radii**:
  - Soften strict enterprise grids with high border radii. Use `rounded-2xl`, `rounded-[2rem]`, or `rounded-[3rem]` for large cards.
- **Hero Environments**:
  - Images or videos in heroes *must* have a dark overlay (e.g., `bg-black/50` or a dark blue gradient overlay) to ensure perfect contrast for white text.
- **Hover States (Interactive Polish)**:
  - Keep transitions smooth (`transition-all duration-300` or `duration-500`).
  - Prefer subtle background shifts (`hover:bg-gray-50`) and soft internal scaling (`group-hover:scale-105`) over adding structural shadows on hover.

---

## 4. Brand-Specific Context Shifting
When building dedicated brand pages (`/brands/`), maintain the core layout rules but shift the *accent colors* seamlessly to match the hardware vendor's identity:

- **Ubiquiti**: Standard Nexhop Blue + Silver.
- **MikroTik**: Light Sky Blue / Cyan accents.
- **Aruba**: Orange / Red-Orange accents.
- **Grandstream**: Deep Red / Crimson accents.

---

## 5. Section Spacing & Grid Breakpoints
- **Mobile Density**: Product and capability grids should ideally collapse to `grid-cols-2` on mobile devices (instead of standard `grid-cols-1`) to maximize technical density.
- **Tension Management**: When forcing `grid-cols-2` on mobile, reduce the gap significantly (`gap-4`) and modify cards to have **minimal padding (`p-2` to `p-4`)**, **smaller radii (`rounded-xl` to `rounded-2xl`)**, and **larger internal images** to prevent clipping.
- **Vertical Rhythm**: Maintain absolute visual separation between conceptual blocks. Never let sections bleed into each other without at least `py-16` on mobile and `py-32` on desktop.
