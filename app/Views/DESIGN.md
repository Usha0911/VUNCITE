---
name: Vuncite Core
colors:
  surface: '#fbf8fe'
  surface-dim: '#dbd9de'
  surface-bright: '#fbf8fe'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f2f8'
  surface-container: '#f0edf2'
  surface-container-high: '#eae7ed'
  surface-container-highest: '#e4e1e7'
  on-surface: '#1b1b1f'
  on-surface-variant: '#454650'
  inverse-surface: '#303034'
  inverse-on-surface: '#f2f0f5'
  outline: '#767681'
  outline-variant: '#c6c5d1'
  surface-tint: '#515a95'
  primary: '#000000'
  on-primary: '#ffffff'
  primary-container: '#0a154d'
  on-primary-container: '#7680bd'
  inverse-primary: '#bbc3ff'
  secondary: '#7b5900'
  on-secondary: '#ffffff'
  secondary-container: '#fdbb12'
  on-secondary-container: '#6c4d00'
  tertiary: '#000000'
  on-tertiary: '#ffffff'
  tertiary-container: '#380c00'
  on-tertiary-container: '#b97158'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dee0ff'
  primary-fixed-dim: '#bbc3ff'
  on-primary-fixed: '#0a154d'
  on-primary-fixed-variant: '#39427b'
  secondary-fixed: '#ffdea4'
  secondary-fixed-dim: '#fdbb12'
  on-secondary-fixed: '#261900'
  on-secondary-fixed-variant: '#5d4200'
  tertiary-fixed: '#ffdbcf'
  tertiary-fixed-dim: '#ffb59c'
  on-tertiary-fixed: '#380c00'
  on-tertiary-fixed-variant: '#703621'
  background: '#fbf8fe'
  on-background: '#1b1b1f'
  surface-variant: '#e4e1e7'
typography:
  display-lg:
    fontFamily: Outfit
    fontSize: 64px
    fontWeight: '600'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Outfit
    fontSize: 40px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  headline-xl:
    fontFamily: Outfit
    fontSize: 40px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-lg:
    fontFamily: Outfit
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.3'
  headline-md:
    fontFamily: Outfit
    fontSize: 24px
    fontWeight: '500'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.5'
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: 0.05em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 4px
  xs: 8px
  sm: 16px
  md: 24px
  lg: 48px
  xl: 80px
  container-max: 1280px
  gutter: 24px
  margin-mobile: 20px
---

## Brand & Style
The design system is engineered to evoke a sense of "Precision Elegance"—combining the technical rigor of enterprise software with the frictionless, high-end aesthetic of luxury consumer technology. It targets a sophisticated audience that values clarity, speed, and structural integrity.

The visual style is a hybrid of **Minimalism** and **Glassmorphism**. It utilizes expansive white space, a highly disciplined grid, and subtle depth cues. Elements appear to float on a clean, atmospheric background, utilizing frosted glass effects and soft, multi-layered shadows to establish a clear hierarchy without visual clutter. The aesthetic is inspired by the functional beauty of modern developer tools and the premium finish of high-end hardware interfaces.

## Colors
The palette is anchored by deep, authoritative blues and a vibrant, energetic gold accent.

- **Primary & Dark:** Used for structural elements, primary branding, and high-emphasis navigation. The transition from Primary (#09144D) to Dark (#050C34) provides a sophisticated depth for gradients and background layering.
- **Secondary (Accent):** The Gold (#F5B400) is used sparingly for high-value calls to action, status indicators, or "moment of delight" highlights.
- **Surface Strategy:** The background (#FAFBFF) is cool and airy. Surfaces should use the `glass_surface` token with a backdrop-blur (minimum 12px) to create the glassmorphic effect.
- **Semantic Colors:** Use standard success (emerald), warning (amber), and error (crimson) tones, but desaturate them slightly to maintain the premium, professional atmosphere.

## Typography
The typographic system relies on the contrast between the geometric, modern character of **Outfit** and the utilitarian precision of **Inter**.

- **Headlines:** Use Outfit for all headings. The tracking should be tightened slightly (-1% to -2%) at larger sizes to maintain a "locked-in" editorial feel.
- **Body:** Inter is the workhorse for all interface text, providing exceptional readability. Maintain a generous line height (1.6) for long-form content to enhance the feeling of spaciousness.
- **Labels:** Use Inter Bold for small labels and metadata, often paired with a slight letter-spacing increase and uppercase styling for distinct categorization.

## Layout & Spacing
The layout follows a **Fluid Grid** model with strict adherence to a 4px/8px baseline rhythm.

- **Desktop:** 12-column grid with 24px gutters. Use wide margins (80px+) to create a focused, "island" feel for content containers.
- **Tablet:** 8-column grid with 20px gutters.
- **Mobile:** 4-column grid with 16px gutters and 20px side margins.
- **Philosophy:** Favor "Over-Spacing." When in doubt, increase the vertical padding. Section transitions should feel airy, using the `xl` spacing token to separate distinct conceptual blocks.

## Elevation & Depth
Depth is communicated through a combination of **Glassmorphism** and **Ambient Shadows**.

1.  **Level 0 (Base):** The #FAFBFF background.
2.  **Level 1 (Cards/Floating Elements):** White or semi-transparent (#FFFFFF) surfaces with a subtle 1px border (`glass_border`) and a soft, diffused shadow: `0 4px 24px rgba(5, 12, 52, 0.04)`.
3.  **Level 2 (Modals/Popovers):** Higher glassmorphic intensity (blur 20px) with a more pronounced shadow: `0 12px 48px rgba(5, 12, 52, 0.08)`.
4.  **Borders:** Instead of harsh lines, use 1px solid borders with very low opacity primary color (`rgba(9, 20, 77, 0.08)`) to define boundaries.

## Shapes
The shape language is defined by large, friendly, but professional radii.

- **Main Containers:** Use a consistent **20px radius** for all primary cards, modals, and main UI containers.
- **Small Elements:** Buttons and input fields should follow the `rounded-lg` (16px) or `rounded-xl` (24px) patterns to maintain harmony with the larger containers.
- **Visual Continuity:** Ensure that nested elements have a slightly smaller radius than their parent container to maintain optical balance (e.g., a 12px inner card inside a 20px outer card).

## Components
- **Buttons:** Primary buttons use the Primary Blue (#09144D) with white text. Secondary buttons should be glassmorphic with a subtle border. All buttons have a high vertical padding (12px–16px) and 16px corner radius.
- **Inputs:** Fields use a light gray or glass background with a 1px border that transitions to Primary Blue on focus. Labels sit above the field in `label-md` style.
- **Cards:** The signature component. Use the 20px roundedness, white background (or glass), and the Level 1 shadow. Padding should be generous (24px or 32px).
- **Chips/Badges:** Small, pill-shaped elements with light tinted backgrounds and dark text. Used for status or categorization.
- **Navigation:** Top-bar should be glassmorphic with a `backdrop-filter: blur(16px)` and a subtle bottom border.
- **Interactive States:** Use smooth transitions (200ms ease-out) for all hover states. Hovering over a card should slightly increase the shadow spread and lift the element by 2px.