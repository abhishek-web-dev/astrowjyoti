import { defineConfig } from 'vite';
import { resolve, dirname } from 'path';
import { fileURLToPath } from 'url';
import fs from 'fs';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

function getHtmlInputs() {
  const inputs = {};
  // The directories where your HTML files are located
  const directories = ['.', 'Astrology', 'Consultations'];
  
  directories.forEach(dir => {
    if (fs.existsSync(dir)) {
      const files = fs.readdirSync(dir);
      files.forEach(file => {
        if (file.endsWith('.html')) {
          const name = file.replace('.html', '');
          // Use a unique name for the rollup input key
          const key = dir === '.' ? name : `${dir}_${name}`;
          inputs[key] = resolve(__dirname, dir === '.' ? file : `${dir}/${file}`);
        }
      });
    }
  });
  
  return inputs;
}

export default defineConfig({
  build: {
    rollupOptions: {
      input: getHtmlInputs()
    }
  }
});
