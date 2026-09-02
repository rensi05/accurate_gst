---
name: Executive Precision
colors:
  surface: '#f7f9fc'
  surface-dim: '#d8dadd'
  surface-bright: '#f7f9fc'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f7'
  surface-container: '#eceef1'
  surface-container-high: '#e6e8eb'
  surface-container-highest: '#e0e3e6'
  on-surface: '#191c1e'
  on-surface-variant: '#3e4850'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f4'
  outline: '#6e7881'
  outline-variant: '#bec8d2'
  surface-tint: '#006491'
  primary: '#006491'
  on-primary: '#ffffff'
  primary-container: '#1ea5e8'
  on-primary-container: '#003752'
  inverse-primary: '#89ceff'
  secondary: '#bb0013'
  on-secondary: '#ffffff'
  secondary-container: '#e71520'
  on-secondary-container: '#fffbff'
  tertiary: '#5f5e5e'
  on-tertiary: '#ffffff'
  tertiary-container: '#9d9b9b'
  on-tertiary-container: '#333333'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#c9e6ff'
  primary-fixed-dim: '#89ceff'
  on-primary-fixed: '#001e2f'
  on-primary-fixed-variant: '#004c6e'
  secondary-fixed: '#ffdad6'
  secondary-fixed-dim: '#ffb4ab'
  on-secondary-fixed: '#410002'
  on-secondary-fixed-variant: '#93000d'
  tertiary-fixed: '#e4e2e1'
  tertiary-fixed-dim: '#c8c6c6'
  on-tertiary-fixed: '#1b1c1c'
  on-tertiary-fixed-variant: '#474747'
  background: '#f7f9fc'
  on-background: '#191c1e'
  surface-variant: '#e0e3e6'
typography:
  display:
    fontFamily: Plus Jakarta Sans
    fontSize: 64px
    fontWeight: '800'
    lineHeight: 72px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Plus Jakarta Sans
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
  headline-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 24px
    fontWeight: '700'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 30px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 26px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 8px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 20px
  margin-desktop: 64px
  section-gap: 120px
---

## Brand & Style

This design system is engineered for executive-level tax advisory, prioritizing clarity, authority, and meticulous precision. The aesthetic is a fusion of **High-End Minimalism** and **Modern Corporate**, drawing inspiration from global financial institutions. 

The visual narrative centers on "The Trusted Path"—using structured white space and a deliberate color rhythm to guide the user through complex regulatory information with ease. The emotional response is one of absolute reliability, calm expertise, and modern efficiency. High-contrast typography paired with soft, layered surfaces ensures the UI feels premium yet accessible.

## Colors

The palette is anchored by **Primary Blue (#1EA5E8)**, representing institutional trust and technical fluency. This color is used for primary actions, structural navigation, and navigational icons. **Primary Red (#ED1C24)** is reserved strictly for high-urgency CTAs, error states, and critical tax alerts to maintain its visual impact.

The background uses a refined **Light Grey (#F7F9FC)** to reduce eye strain and provide a sophisticated canvas for **Pure White (#FFFFFF)** surfaces. Text is rendered in **Dark Grey (#2E2E2E)** rather than pure black to soften the contrast while maintaining AA/AAA accessibility standards for long-form financial reading.

## Typography

The system utilizes a dual-font strategy. **Plus Jakarta Sans** provides a modern, approachable geometric feel for headlines, conveying confidence and vitality. **Inter** is used for all functional and body text, chosen for its exceptional legibility in data-dense tax environments.

Generous line-heights (1.6x for body) are mandatory to ensure that complex regulatory clauses remain readable. Letter spacing is slightly tightened for display headings to create a "locked-in" executive feel, while labels utilize a tracking increase of 5% for better scannability at small sizes.

## Layout & Spacing

This design system employs a **Fixed Grid** philosophy for desktop (12 columns) and a **Fluid Grid** for mobile (4 columns). The layout maximizes luxury through "Active Whitespace"—using large 120px vertical gaps between major sections to prevent information density from feeling overwhelming.

Alignment follows a strict 8px baseline grid. Elements should be grouped using proximity: related fields (like a form input and its label) use 8px spacing, while distinct card components within a grid use 24px gutters. Content should be centered within the 1280px max-width container to maintain a balanced, focused appearance on ultra-wide monitors.

## Elevation & Depth

Hierarchy is established through **Tonal Layering** and **Ambient Shadows**. Instead of heavy borders, the system uses subtle depth cues:
- **Level 0 (Background):** #F7F9FC - The base canvas.
- **Level 1 (Cards/Surfaces):** #FFFFFF - White surfaces with a very soft, diffused shadow (0px 4px 20px rgba(0,0,0,0.04)).
- **Level 2 (Hover/Active):** An increased shadow spread (0px 12px 32px rgba(0,0,0,0.08)) and a 1px border of #1EA5E8 to denote interactivity.

Glassmorphism is used sparingly, specifically for the **Sticky Navigation** bar, which utilizes a 20px backdrop blur and 85% opacity white fill to maintain context of the scroll position without sacrificing legibility.

## Shapes

The shape language is defined as **Rounded**, utilizing a consistent 16px (1rem) radius for all primary containers and cards. This softens the "industrial" feel of financial data, making the firm feel more modern and client-centric.

- **Buttons:** 8px radius (Soft) to maintain a sense of professional structure.
- **Form Inputs:** 8px radius.
- **Service Cards:** 16px radius (Rounded).
- **Icon Enclosures:** Circular (Pill) to create visual interest against the rectangular grid.

## Components

### Buttons
- **Primary:** #1EA5E8 background, White text. Bold weight.
- **Urgent (CTA):** #ED1C24 background, White text. Used for "Start Your Filing" or "Emergency Consultation."
- **Ghost:** Transparent background, #1EA5E8 border (1px) and text.

### Service Cards
White background, 16px rounded corners, 24px internal padding. On hover, the card should lift slightly (y-4px) and the primary icon should scale by 1.1x.

### Inputs & Forms
Inputs use #FFFFFF background with a 1px #E8E8E8 border. On focus, the border transitions to #1EA5E8 with a 3px soft blue outer glow. Labels are positioned above the field in `label-md` style.

### Accordions (FAQ)
Clean, border-only design. Title in `headline-md`. The toggle icon is a simple 1.5px stroke chevron. When expanded, the background of the header area can subtly shift to #F7F9FC.

### Trust Bars
Logos of partner firms or certifications should be rendered in grayscale (50% opacity) and transition to full color on hover. These are placed in a constrained row with "center-aligned" flexbox distribution.