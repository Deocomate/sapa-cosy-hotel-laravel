# Design Guidelines

This document establishes the visual design identity, typography system, component patterns, and UI guidelines for **Sapa Cosy Hotel**.

---

## 🎨 1. Brand Identity & Aesthetic Principles

### Vision & Tone
Sapa Cosy Hotel offers guests an authentic, warm, and nature-immersed mountain resort experience in Sa Pa. The visual design reflects:
- **Warmth & Hospitality**: Friendly earth tones, rustic accents, and welcoming typography.
- **Nature & Mountains**: Cloud whites, mountain mist blues, warm wood brown, and terraced gold.
- **Clarity & Accessibility**: High contrast readability, responsive layouts, and simple navigation.

---

## 🎨 2. Color Palette

```
  ┌─────────────────────────────────────────────────────────────┐
  │ Primary Wood/Earth      │ #7C4A21  │ rgb(124, 74, 33)       │
  │ Secondary Forest Green  │ #2D5A27  │ rgb(45, 90, 39)        │
  │ Accent Cloud/Gold       │ #E0A838  │ rgb(224, 168, 56)      │
  │ Neutral Dark (Text)     │ #2B2D2F  │ rgb(43, 45, 47)        │
  │ Neutral Light (Bg)      │ #F9F7F3  │ rgb(249, 247, 243)    │
  └─────────────────────────────────────────────────────────────┘
```

| Color Variable | Hex Code | Purpose |
|----------------|----------|---------|
| `--color-primary` | `#7C4A21` | Main brand headers, primary call-to-action buttons, active navigation. |
| `--color-secondary` | `#2D5A27` | Eco badges, green highlights, secondary action buttons. |
| `--color-accent` | `#E0A838` | Star rating icons, price tags, promotional badges. |
| `--color-background` | `#F9F7F3` | Page background tint (soft cream). |
| `--color-card-bg` | `#FFFFFF` | Room cards, service cards, content containers. |
| `--color-text` | `#2B2D2F` | Primary text and body content. |
| `--color-muted` | `#6C757D` | Subtitles, meta info, author & timestamp text. |

---

## 🔤 3. Typography System

- **Primary Font Family**: `'Roboto', 'Inter', system-ui, sans-serif`
- **Heading Font Family**: `'Playfair Display', 'Merriweather', serif` (for elegant titles and room headings)

### Type Scale

| Scale | CSS Size | Font Weight | Usage |
|-------|----------|-------------|-------|
| Hero Title | `2.5rem - 3.25rem` (40-52px) | Bold (700) | Main hero landing banner title. |
| Heading 1 (H1) | `2rem - 2.5rem` (32-40px) | SemiBold (600) | Section titles ("Phòng Nghỉ", "Dịch Vụ"). |
| Heading 2 (H2) | `1.5rem - 1.75rem` (24-28px) | SemiBold (600) | Card titles, detail headings. |
| Heading 3 (H3) | `1.125rem - 1.25rem` (18-20px) | Medium (500) | Subsection subtitles. |
| Body Text | `1rem` (16px) | Regular (400) | Paragraph text, article content. |
| Small / Meta | `0.875rem` (14px) | Regular (400) | Captions, date badges, rating counts. |

---

## 🧩 4. Key UI Component Patterns

### 4.1 Card Components (Rooms & Services)
- **Border Radius**: `12px` (`rounded-xl`).
- **Shadow**: Light elevation (`0 4px 6px -1px rgba(0, 0, 0, 0.1)`).
- **Hover Micro-animation**: Lift effect on hover (`transform: translateY(-4px); transition: all 0.3s ease;`).
- **Aspect Ratio**: `16:9` or `4:3` for room thumbnails.

### 4.2 Booking Form
- **Form Controls**: Clean rounded input fields with clear floating labels or placeholders.
- **Focus States**: Subtly highlighted border with `--color-primary` outline.
- **Button CTA**: Full-width prominent CTA button ("Đặt Phòng Ngay").

---

## 📱 5. Responsive Design Breakpoints

| Breakpoint | Target Devices | Layout Adjustments |
|------------|----------------|--------------------|
| `< 640px` (`sm`) | Mobile phones | Single-column cards, hamburger navigation. |
| `640px - 1024px` (`md`) | Tablets | 2-column grid for rooms & services. |
| `> 1024px` (`lg`) | Laptops & Desktop | 3 or 4-column grid, sticky header & contact sidebar. |
