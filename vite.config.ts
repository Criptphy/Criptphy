import { defineConfig } from 'vite';
import { resolve } from 'path';

const src = resolve(__dirname, 'src');
const outDir = resolve(__dirname, 'dist');

export default defineConfig({
  build: {
    outDir,
    emptyOutDir: true,
    rollupOptions:  {
      input: {
        main: resolve(__dirname, 'index.html'),
        legal: resolve(src, 'page', 'legal.html'),
        manager: resolve(src, 'php', 'manager.html'),
        settings: resolve(src, 'php', 'settings.html'),
      }
    }
  }
});
