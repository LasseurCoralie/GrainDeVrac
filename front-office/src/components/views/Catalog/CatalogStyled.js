import styled from 'styled-components';
import theme from '../../../theme/theme';

const CatalogStyled = styled.div`
  text-align: center;
  color: white;

  p.sub-txt {
    color: ${theme.colors.black};
    margin: 0 7em;
  }

  div.sort-bar {
    background-color: ${theme.colors.purple};
    padding: .1em;
    margin: 1em 0;


    p.sort-bar--title {
      font-family: ${theme.fonts.special};
      text-transform: uppercase;
      font-weight: bold;
      position: relative;


      :after {
        content: '>';
        font-size: 1.5em;
        margin-left: .5em;
        position: absolute;
        transform: rotate(90deg);
        top: -7px;
      }
    }

    ul.hidden-list {
      display: none;
    }

    ul.shown-list {
      display: block;
    }

    ul.sort-bar--list {
      list-style: none;
      text-align: left;
      font-size: 1.5em;
      padding: 0;
      margin: 0 1em;


      li.sort-bar--element {
        margin: .5em 0;

        label {
          margin-left: .5em;
        }

        input.input-txt, select {
          width: 100%;
          background-color: white;
          color: ${theme.colors.textInput};
          border-radius: 5px;
        }

      }
    }
  }
`;

export default CatalogStyled;